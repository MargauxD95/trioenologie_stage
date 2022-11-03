<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use App\Form\PictureType;
use App\Repository\PictureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/admin/picture', name:'admin_picture_')]
class AdminPictureController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function indexPicture(PictureRepository $pictureRepository): Response
    {
        return $this->render('admin/picture/pictures.html.twig', [
            'pictures' => $pictureRepository->findAll(),
        ]);
    }
    
#--------- NEW One

    #[Route('/new', name: 'newOne', methods: ['GET', 'POST'])]
    public function newPicture(
    Request $request, 
    PictureRepository $pictureRepository,
    EntityManagerInterface $entityManager): Response
    {
    require_once('../templates/includes/imagesProcessing.php');
    
    $picture = new Picture();
    $pictureDirectory= $this->getParameter('pictures_directory') ;
    $form = $this->createForm(PictureType::class, $picture, ['addOne'=>true]);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {            
        // on appelle la fonction uploadSimple dont on stocke le résultat dans une variable "pic"
        $pic = uploadSimple($form, $pictureDirectory, $pictureRepository);
        
        // on vérifie que $pic n'est pas null ($pic = null si image existe déjà en bdd)
        if ($pic) {
            $entityManager->persist($pic); 
            $entityManager->flush(); 
            // on enregistre dans le repository
            $pictureRepository->add($pic, true);
        }
        
        
        return $this->redirectToRoute('admin_picture_index', [], Response::HTTP_SEE_OTHER);
    
    }// EO if form submitted

    return $this->renderForm('admin/picture/newPicture.html.twig', [
        'picture' => $picture,
        'formPicture' => $form,
    ]);
}

#--------- NEW Multi
    #[Route('/newm', name: 'newMulti', methods: ['GET', 'POST'])]
    public function newPictures(
        Request $request, 
        PictureRepository $pictureRepository,
        EntityManagerInterface $entityManager): Response
    {
        require_once('../templates/includes/imagesProcessing.php');
        
        $picture = new Picture();
        $pictureDirectory= $this->getParameter('pictures_directory') ;
        $form = $this->createForm(PictureType::class, $picture, ['addMulti'=>true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 
            
            // on récupère la valeur du champ d'upload (pictureFile)
            $pictures = $form->get('pictureFile')->getData();
            // on appelle la fonction uploadMulti dont on stocke le résultat dans un array "pics"
            $pics = uploadMulti($pictures, $pictureDirectory, $pictureRepository);
            
            // pour chaque image de l'array pics
            foreach ($pics as $pic) {
                // on enregistre en BDD
                $entityManager->persist($pic); 
                $entityManager->flush(); 
                // on enregistre dans le repository
                $pictureRepository->add($pic, true);
            }
            if (count($pics)==1) {
                return $this->redirectToRoute('admin_picture_edit', [], Response::HTTP_SEE_OTHER);
            }else{
                return $this->redirectToRoute('admin_picture_index', [], Response::HTTP_SEE_OTHER);
            }
        }// EO if form submitted

        return $this->renderForm('admin/picture/newPictures.html.twig', [
            'picture' => $picture,
            'formPicture' => $form,
        ]);
    }
#--------- SHOW
    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function showPicture(Picture $picture): Response
    {
        return $this->render('admin/picture/showPicture.html.twig', [
            'picture' => $picture,
        ]);
    }
#--------- EDIT
    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function editPicture(
        Request $request, 
        Picture $picture, 
        PictureRepository $pictureRepository): Response
    {
        $form = $this->createForm(PictureType::class, $picture, ['edit' => true]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pictureRepository->add($picture, true);

            return $this->redirectToRoute('admin_picture_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin/picture/editPicture.html.twig', [
            'picture' => $picture,
            'formPicture' => $form,
        ]);
    }
#--------- DELETE
    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function deletePicture(
        Request $request, 
        Picture $picture, 
        PictureRepository $pictureRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$picture->getId(), $request->request->get('_token'))) {
            // on s'assure que cette image n'est liée à aucune entité
            $pictureRepository->remove($picture, true);
        }

        return $this->redirectToRoute('admin_picture_index', [], Response::HTTP_SEE_OTHER);
    }
}
