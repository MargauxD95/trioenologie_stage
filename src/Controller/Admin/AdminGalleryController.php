<?php

namespace App\Controller\Admin;

use DateTimeImmutable;
use App\Entity\Gallery;
use App\Entity\Picture;
use App\Form\GalleryType;
use App\Repository\GalleryRepository;
use App\Repository\PictureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/gallery', name:'admin_gallery_')]
class AdminGalleryController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function indexGalleries(GalleryRepository $galleryRepository): Response
    {
        return $this->render('admin/gallery/galleries.html.twig', [
            'galleries' => $galleryRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function newGallery(
        Request $request, 
        GalleryRepository $galleryRepository, 
        EntityManagerInterface $entityManager): Response
    {
        $gallery = new Gallery();
        $form = $this->createForm(GalleryType::class, $gallery);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $gallery->setCreatedAt(new DateTimeImmutable('now'));         
            // on récupère les images transmises dans le champ d'upload (pictures)
            $pictures = $form->get('pictures')->getData();
            
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
                
                // maintenant que l'image est physiquement enregistrée dans le répertoire uploads/pictures  
                // on récupère les infos size du fichier dans un array ([0]=width [1]=height)
                $array = getimagesize( "./uploads/pictures/".$nomPict);
                
                // on instancie un objet Picture dont on initialise les valeurs
                $pict = new Picture();
                $pict->setTitle($name); 
                $pict->setPictureFile($nomPict);
                $pict->setWidth($array[0]); // on affecte la valeur Width à la propriété Width
                $pict->setHeight($array[1]); // on affecte la valeur Height à la propriété Height

                // on enregistre l'image dans la gallery
                $gallery -> addPicture($pict);               
            } // EO foreach $pictures

            // on récupère les images sélectionnées dans le champ savedPictures (les images issues de la bdd)
            $images =  $form->get('savedPictures')->getData();
            
            // on boucle sur les images du champ savedPictures 
            foreach($images as $image){
                // on ajoute chaque image sélectionnée à la gallery
                $gallery -> addPicture($image);
            }//EO foreach $images

            // On enregistre la Gallery
            // qui va sauvegarder définitivement en bdd les images uploadées et créer les liens dans la table de jointure
            // grâce au 'cascade:['persist] ajouté dans la déclaration de la relation (cf Entity/Gallery))
            $entityManager->persist($gallery);
            $entityManager->flush();
            $galleryRepository->add($gallery, true);

            return $this->redirectToRoute('admin_gallery_index', [], Response::HTTP_SEE_OTHER);
        } //EO If form isSubmitted

        return $this->renderForm('admin/gallery/newGallery.html.twig', [
            'gallery' => $gallery,
            'formGallery' => $form,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Gallery $gallery): Response
    {
        return $this->render('admin/gallery/showGallery.html.twig', [
            'gallery' => $gallery,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Gallery $gallery, GalleryRepository $galleryRepository): Response
    {
        $form = $this->createForm(GalleryType::class, $gallery);
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
                    
                     // maintenant que l'image est physiquement enregistrée dans le répertoire uploads/pictures  
                    // on récupère les infos size du fichier dans un array ([0]=width [1]=height)
                    $array = getimagesize( "./uploads/pictures/".$nomPict);
                
                    // on instancie un objet Picture dont on initialise les valeurs
                    $pict = new Picture();
                    $pict->setTitle($name); 
                    $pict->setPictureFile($nomPict);
                    $pict->setWidth($array[0]); // on affecte la valeur Width à la propriété Width
                    $pict->setHeight($array[1]); // on affecte la valeur Height à la propriété Height

                    // on enregistre l'image dans la galerie
                    $gallery -> addPicture($pict);               
                } // EO foreach $pictures
            } // EO if $pictures

            // on récupère les images sélectionnées dans le champ savedPictures (les images issues de la bdd)
            $images =  $form->get('savedPictures')->getData();

            // on boucle sur les images du champ savedPictures 
            foreach($images as $image){
                // on ajoute chaque image sélectionnée à la galerie
                $gallery -> addPicture($image);
            }
        
            $galleryRepository->add($gallery, true);           

            return $this->redirectToRoute('admin_gallery_index', [], Response::HTTP_SEE_OTHER);
        } //EO if form isSubmitted

        return $this->renderForm('admin/gallery/editGallery.html.twig', [
            'gallery' => $gallery,
            'formGallery' => $form,
        ]);
    }


    #[Route('/edit/{gallery_id}/unlinkPicture/{id}', name: 'unlinkPicture', methods: ['GET', 'POST','DELETE'])]
    public function unlinkPicture(
        $gallery_id, 
        $id, 
        Request $request, 
        GalleryRepository $galleryRepository, 
        PictureRepository $pictureRepository, 
        EntityManagerInterface $entityManager ): Response
    {
        $gallery = $galleryRepository->find($gallery_id);
        $picture = $pictureRepository->find($id);
        $gallery->removePicture($picture);

        $entityManager->persist($gallery);
        $entityManager->flush();
       
        $form = $this->createForm(GalleryType::class, $gallery);
        $form->handleRequest($request);

        $pictures = $gallery->getPictures();

        return $this->redirectToRoute('admin_gallery_index', [], Response::HTTP_SEE_OTHER);
        
        return $this->renderForm('admin/article/editGallery.html.twig', [
            'gallery' => $gallery,
            'formGallery' => $form,
            'pictures' => $pictures
        ]);

    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Gallery $gallery, GalleryRepository $galleryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$gallery->getId(), $request->request->get('_token'))) {
            $galleryRepository->remove($gallery, true);
        }

        return $this->redirectToRoute('admin_gallery_index', [], Response::HTTP_SEE_OTHER);
    }
}
