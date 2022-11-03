<?php

namespace App\Controller\Admin;

use DateTimeImmutable;
use App\Entity\Article;
use App\Entity\Picture;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CarouselRepository;
use App\Repository\PictureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/article', name:'admin_article_')]
class AdminArticleController extends AbstractController
{     

    #[Route('/', name: 'index', methods: ['GET'])]
    public function indexArticles(ArticleRepository $articleRepository): Response
    {
        return $this->render('admin/article/articles.html.twig', [
            'articles' => $articleRepository->findAll(),
        ]);
    }
# ---------- NEW
    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function newArticle(
        Request $request, 
        ArticleRepository $articleRepository, 
        PictureRepository $pictureRepository,
        EntityManagerInterface $entityManager): Response
    {
        require_once('../templates/includes/imagesProcessing.php');
        
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        $pictureDirectory = $this->getParameter('pictures_directory');
        $pictureH200Directory = $this->getParameter('picturesH200_directory');


        if ($form->isSubmitted() && $form->isValid()) {
            $article->setCreatedAt(new DateTimeImmutable('now'));

            $pictures = $form->get('pictures')->getData();
            
            # ------ Traitement des images uploadées

            // on appelle la fonction uploadMulti dont on stocke le résultat dans un array "pics"
            $pics = uploadMulti($pictures, $pictureDirectory, $pictureRepository);
            // pour chaque image de l'array pics
            foreach ($pics as $pic) {
                // dump($pic);
                // die;
                $article -> addPicture($pic); // on attache l'image à l'article'
                $filename = $pic->getPictureFile();

            // ne fonctionne pas en local (pb autorisation Apache, devrait fonctionner sans souci une fois déployé)
            //    resizeOnHeight($pictureDirectory,$filename,200,$pictureRepository);      
            
            }
           
            # ------ Traitement des images sélectionnées issues de la bdd

            // on récupère les images sélectionnées dans le champ savedPictures (les images issues de la bdd)
            $images =  $form->get('savedPictures')->getData();            
            // pour chaque image du champ savedPictures 
            foreach($images as $image){                
                $article -> addPicture($image); // on ajoute chaque image sélectionnée à l'article
            }//EO foreach $images

            // On enregistre l'article 
            // qui va sauvegarder définitivement en bdd les images uploadées et créer les liens dans la table de jointure
            // grâce au 'cascade:['persist] ajouté dans la déclaration de la relation (cf Entity/Article))
            $entityManager->persist($article);
            $entityManager->flush();
            $articleRepository->add($article, true);


            return $this->redirectToRoute('admin_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/article/newArticle.html.twig', [
            'article' => $article,
            'formArticle' => $form,
        ]);
    }

# ---------- SHOW
    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function showArticle(Article $article, CarouselRepository $carouselRepository): Response
    {
        // require_once('../templates/includes/imagesProcessing.php');

        // # Dans le show on veut que toutes les images aient la même hauteur pour être affichées en carousel        
        // $pictures = $article->getPictures();
        // $pictureDirectory = $this->getParameter('pictures_directory').'/H200';
        // foreach ($pictures as $picture) {
            
        //     $picturefile = $picture->getPictureFile();
            
        //     resizeOnHeight($pictureDirectory,$picturefile,200); // on appelle la fontion resizeOnHeight du fichier imageProcessing.php
        //     // dump($pictureDirectory);
        //     // die;
        // }
        
        return $this->render('admin/article/showArticle.html.twig', [
            'article' => $article,
            'carousels' =>$carouselRepository->findAll()
        ]);
    }

# ---------- EDIT
    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function editArticle(
        Request $request, 
        Article $article, 
        ArticleRepository $articleRepository): Response
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // on récupère les images transmises dans le champ d'upload (pictures)
            $pictures = $form->get('pictures')->getData();
        
            if($pictures){
                // on boucle sur les images uploadées
                foreach($pictures as $picture){
                    // on attribue un nom de fichier unique à l'image téléchargée
                    $nomPict = date('YmdHis') . "-" . uniqid() . "." . $picture->getClientOriginalExtension();
            
                    //on récupère le nom de fichier original de l'image
                    $name = $picture->getClientOriginalName();
            
                    // on enregistre l'image dans le répertoire uploads/pictures (image physique)
                    $picture->move(
                        $this->getParameter('pictures_directory'),
                        $nomPict
                    ); // EO move  

                // on enregistre l'image en BDD table Picture (ses infos)
                    $pict = new Picture();
                    $pict->setTitle($name); 
                    $pict->setPictureFile($nomPict);

                    // on enregistre l'image dans l'article
                    $article -> addPicture($pict);               
                } // EO foreach $pictures
            } // EO if $pictures

            // on récupère les images sélectionnées dans le champ savedPictures (les images issues de la bdd)
            $images =  $form->get('savedPictures')->getData();

            // on boucle sur les images du champ savedPictures 
            foreach($images as $image){
                // on ajoute chaque image sélectionnée à l'article
                $article -> addPicture($image);
            }
        
            $articleRepository->add($article, true);

            return $this->redirectToRoute('admin_article_index', [], Response::HTTP_SEE_OTHER);

        } //EO if form isSubmitted

        return $this->renderForm('admin/article/editArticle.html.twig', [
            'article' => $article,
            'formArticle' => $form,
        ]);
    } //EO function

# ---------- UNLINK
    #[Route('/edit/{article_id}/unlinkPicture/{id}', name: 'unlinkPicture', methods: ['GET', 'POST','DELETE'])]
    public function unlinkPicture(
        $article_id, 
        $id, 
        Request $request, 
        ArticleRepository $articleRepository, 
        PictureRepository $pictureRepository, 
        EntityManagerInterface $entityManager ): Response
    {
        $article = $articleRepository->find($article_id);
        $picture = $pictureRepository->find($id);
        $article->removePicture($picture);

        $entityManager->persist($article);
        $entityManager->flush();
       
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        $pictures = $article->getPictures();

        return $this->redirectToRoute('admin_article_index', [], Response::HTTP_SEE_OTHER);
        
        return $this->renderForm('admin/article/editArticle.html.twig', [
            'article' => $article,
            'formArticle' => $form,
            'pictures' => $pictures
        ]);

    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function deleteArticle(
        Request $request, 
        Article $article, 
        ArticleRepository $articleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$article->getId(), $request->request->get('_token'))) {
            $articleRepository->remove($article, true);
        }

        return $this->redirectToRoute('admin_article_index', [], Response::HTTP_SEE_OTHER);
    }
}
