<?php

namespace App\Controller\Admin;

use App\Entity\Carousel;
use App\Entity\CarouselPicture;
use App\Entity\Picture;
use App\Form\CarouselType;
use App\Repository\CarouselPictureRepository;
use App\Repository\CarouselRepository;
use App\Repository\PictureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/carousel', name:'admin_carousel_')]
class AdminCarouselController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function indexCarousels(CarouselRepository $carouselRepository): Response
    {
        return $this->render('admin/carousel/carousels.html.twig', [
            'carousels' => $carouselRepository->findAll(),
        ]);
    }

#----- NEW
    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function newCarousel(
        Request $request, 
        CarouselRepository $carouselRepository, 
        PictureRepository $pictureRepository,
        CarouselPictureRepository $carouselPictureRepository,
        EntityManagerInterface $entityManager): Response
    {
        require_once('../templates/includes/imagesProcessing.php');
        $carousel = new Carousel();
        $form = $this->createForm(CarouselType::class, $carousel);
        $form->handleRequest($request);

        $pictureDirectory = $this->getParameter('pictures_directory');
        $pictureDirectoryH200 = $pictureDirectory.'/H200';
        $pics = []; // array dans lequel on va stocker temporairement toutes les images (upload et saved)

        if ($form->isSubmitted() && $form->isValid()) {            
            
            # ----- Traitement des images uploadées

            // on récupère les images transmises dans le champ d'upload (pictures)
            $pictures = $form->get('pictures')->getData();
            // on appelle la fonction uploadMulti dont on stocke le résultat dans un array "pics"
            $pics = uploadMulti($pictures, $pictureDirectory, $pictureRepository);

            # ----- Traitement des images savedPictures

            // on récupère les images sélectionnées dans le champ savedPictures (les images issues de la bdd)
            $images =  $form->get('savedPictures')->getData();            
            // on boucle sur les images du champ savedPictures 
            foreach($images as $image){                
                array_push($pics,$image); // on ajoute chaque image sélectionnée à l'array pics
            }//EO foreach $images

            // On enregistre le Carousel            
            $entityManager->persist($carousel);
            $entityManager->flush();
            $carouselRepository->add($carousel, true);

            // pour chaque image de l'array pics
            foreach($pics as $key=>$pic){
                $picturefile = $pic->getPictureFile();
                // ne fonctionne pas en local (pb autorisation Apache, devrait fonctionner sans souci une fois déployé)
                // resizeOnHeight($pictureDirectoryH200,$picturefile,200); // on appelle la fontion resizeOnHeight du fichier imageProcessing.php
               
               
                // on l'enregistre en bdd dans la table Picture                         
                $entityManager->persist($pic);
                $entityManager->flush();
                $pictureRepository->add($pic, true);
                // on crée la relation dans CarouselPicture (l'entité de jointure)
                $carouselPicture = new CarouselPicture;
                $carousel->addCarouselPicture($carouselPicture); // on ajoute le carousel
                $pic->addCarouselPicture($carouselPicture); // on ajoute l'image
                $carouselPicture -> setPosition($key); // on précise la position de l'image (son index dans le tableau)
                // on enregistre la relation en bdd dans la table de jointure CarouselPicture
                $entityManager->persist($carouselPicture);
                $entityManager->flush();
                $carouselPictureRepository->add($carouselPicture,true);
            }    

            return $this->redirectToRoute('admin_carousel_index', [], Response::HTTP_SEE_OTHER);
        } //EO If form isSubmitted

        return $this->renderForm('admin/carousel/newCarousel.html.twig', [
            'carousel' => $carousel,
            'formCarousel' => $form,
        ]);
    }

#----- SHOW    
    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(Carousel $carousel): Response
    {
        return $this->render('admin/carousel/showCarousel.html.twig', [
            'carousel' => $carousel,
        ]);
    }

#----- EDIT
    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request, 
        Carousel $carousel, 
        CarouselRepository $carouselRepository,
        PictureRepository $pictureRepository,
        CarouselPictureRepository $carouselPictureRepository,
        EntityManagerInterface $entityManager): Response
    {
        require_once('../templates/includes/imagesProcessing.php');
        $form = $this->createForm(CarouselType::class, $carousel, ['edit' => true]);
        $form->handleRequest($request);
        $pictureDirectory = $this->getParameter('pictures_directory');
        $pics = []; // array dans lequel on va stocker temporairement toutes les images (upload et saved)
        
        if ($form->isSubmitted() && $form->isValid()) {

        # ---- Update des positions des iamges déjà présentes
 
            
        # ----- Traitement de l'ajout d'images
            // on récupère les images transmises dans le champ d'upload (pictures)
            $pictures = $form->get('pictures')->getData();
            
             # ----- Traitement des images uploadées

            // on récupère les images transmises dans le champ d'upload (pictures)
            $pictures = $form->get('pictures')->getData();
            // on appelle la fonction uploadMulti dont on stocke le résultat dans un array "pics"
            $pics = uploadMulti($pictures, $pictureDirectory, $pictureRepository);

            # ----- Traitement des images savedPictures            

            // on récupère les images sélectionnées dans le champ savedPictures (les images issues de la bdd)
            $images =  $form->get('savedPictures')->getData();
            
            // on boucle sur les images du champ savedPictures 
            foreach($images as $image){
                // on ajoute chaque image sélectionnée à l'array pics
                array_push($pics,$image);

            }//EO foreach $images

            // On enregistre le Carousel            
            $entityManager->persist($carousel);
            $entityManager->flush();
            $carouselRepository->add($carousel, true);

            // $index=0;
            // pour chaque image de l'array pics
            foreach($pics as $key=>$pic){

                // on l'enregistre en bdd dans la table Picture                         
                $entityManager->persist($pic);
                $entityManager->flush();
                $pictureRepository->add($pic, true);
                // on update la relation dans CarouselPicture (l'entité de jointure)
                if($carouselPictureRepository->findOneBy(array( "carousel"=>$carousel,"picture"=>$pic))){
                    $carouselPicture = $carouselPictureRepository->findOneBy(array( "carousel"=>$carousel,"picture"=>$pic));
                }
                else{
                    $carouselPicture = new CarouselPicture();
                }
                $carousel->addCarouselPicture($carouselPicture); // on ajoute le carousel
                $pic->addCarouselPicture($carouselPicture); // on ajoute l'image
                
                $carouselPicture -> setPosition($key); // on précise la position de l'image
                // on enregistre la relation en bdd dans la table de jointure CarouselPicture
                $entityManager->persist($carouselPicture);
                $entityManager->flush();
                $carouselPictureRepository->add($carouselPicture,true);
                // On enregistre le Carousel            
                $entityManager->persist($carousel);
                $entityManager->flush();

            }        

            // return $this->redirectToRoute('admin_carousel_index', [], Response::HTTP_SEE_OTHER);
        } //EO if form isSubmitted

        return $this->renderForm('admin/carousel/editCarousel.html.twig', [
            'carousel' => $carousel,
            'formCarousel' => $form,
        ]);
    }


#----- UNLINK
    #[Route('/edit/{carousel_id}/unlinkPicture/{id}', name: 'unlinkPicture', methods: ['GET', 'POST','DELETE'])]
    public function unlinkPicture(
        $carousel_id, 
        $id, 
        Request $request, 
        CarouselRepository $carouselRepository, 
        PictureRepository $pictureRepository, 
        CarouselPictureRepository $carouselPictureRepository,
        EntityManagerInterface $entityManager ): Response
    {
        $carousel = $carouselRepository->find($carousel_id);
        $picture = $pictureRepository->find($id);
        $carouselPicture = $carouselPictureRepository->findOneBy(array( "carousel"=>$carousel_id,"picture"=>$id));
        $carouselPictureRepository->remove($carouselPicture);


        $entityManager->persist($carousel);
        $entityManager->flush();
       
        $form = $this->createForm(CarouselType::class, $carousel);
        $form->handleRequest($request);

        return $this->redirectToRoute('admin_carousel_edit', ["carousel_id"=>$carousel_id, "id"=>$id], Response::HTTP_SEE_OTHER);
        
        return $this->renderForm('admin/article/editCarousel.html.twig', [
            'carousel' => $carousel,
            'formCarousel' => $form,
            // 'pictures' => $pictures
        ]);

    }

#----- DELETE
    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Carousel $carousel, CarouselRepository $carouselRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$carousel->getId(), $request->request->get('_token'))) {
            $carouselRepository->remove($carousel, true);
        }

        return $this->redirectToRoute('admin_carousel_index', [], Response::HTTP_SEE_OTHER);
    }
}
