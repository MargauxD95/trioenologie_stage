<?php

use App\Entity\Picture;


function uploadSimple($form, $pictureDirectory, $pictureRepository){
    $pictureRepository = $pictureRepository;
    $form = $form;
    $pictureDirectory = $pictureDirectory;

    // on récupère la valeur du champ d'upload (pictureFile)
    $image = $form->get('pictureFile')->getData();
    // on instancie un nouvel objet Picture                             
    $picture = new Picture();
    // on attribue un nom de fichier unique à l'image téléchargée
    $nomImage = date('YmdHis') . "-" . uniqid() . "." . $image->getClientOriginalExtension();
    // affecte le nom de fichier calculé à la propriété 'pictureFile' de l'entité Picture
    $picture->setPictureFile($nomImage);
    //on récupère le nom de fichier original de l'image
    $originalName = $image->getClientOriginalName();
    // on vérifie qu'une image avec cet originalName n'existe pas déjà 
    // s'il existe une image avec le même originalName dans la bdd
    if ($pictureRepository->findOneByTitle($originalName)) {
        return ;// on sort de la fonction
    } else {
        // on l'affecte à la propriété title
        $picture->setTitle($originalName);

        // on enregistre l'image dans le répertoire uploads/pictures (image physique)
        $image->move(
            $pictureDirectory,
            $nomImage
        ); // EO move
        
        // maintenant que l'image est physiquement enregistrée dans le répertoire uploads/pictures  
        // on récupère les infos size du fichier dans un array ([0]=width [1]=height)
        $array = getimagesize( "./uploads/pictures/".$nomImage);
        $picture->setWidth($array[0]); // on affecte la valeur Width à la propirété Width
        $picture->setHeight($array[1]); // on affecte la valeur Height à la propirété Height

        return $picture();
    }
        


}

function uploadMulti($pictures, $pictureDirectory, $pictureRepository){
    $pictureRepository = $pictureRepository;
    $pictures = $pictures;
    $pictureDirectory = $pictureDirectory;
    $picturesArray=[];
    
     

    // pour chaque image ($pict) dans le tableau $pictures
    foreach($pictures as $pict){ 

        // on instancie un nouvel objet Picture                             
        $picture = new Picture();

        // on attribue un nom de fichier unique à l'image téléchargée
        $nomPict = date('YmdHis') . "-" . uniqid() . "." . $pict->getClientOriginalExtension(); 

        // affecte le nom de fichier calculé à la propriété 'pictureFile' de l'entité Picture
        $picture->setPictureFile($nomPict);

        //on récupère le nom de fichier original de l'image
        $originalName = $pict->getClientOriginalName();

        // on vérifie qu'une image avec cet originalName n'existe pas déjà  
        // s'il existe une image avec le même originalName dans la bdd
        if ($pictureRepository->findOneByTitle($originalName)) {                    
            continue; // on stoppe le traitement pour cette image et on repart en haut de la boucle pour l'itération suivante
        } else {
            // on l'affecte à la propriété title
            $picture->setTitle($originalName);

            // on enregistre l'image dans le répertoire uploads/pictures (image physique)
            $pict->move(
                $pictureDirectory,
                $nomPict
            ); // EO move
            
            // maintenant que l'image est physiquement enregistrée dans le répertoire uploads/pictures  
            // on récupère les infos size du fichier dans un array ([0]=width [1]=height)
            $array = getimagesize( "./uploads/pictures/".$nomPict);
            $picture->setWidth($array[0]); // on affecte la valeur Width à la propirété Width
            $picture->setHeight($array[1]); // on affecte la valeur Height à la propirété Height

            array_push($picturesArray,$picture);
        }       
    }//EO foreach

    return $picturesArray;  
} // EO function upload


function resizeOnHeight($pictureDirectory, $filename, $wantedHeight,  ){

    // $pictureRepository = $pictureRepository;
    $pictureDirectory = $pictureDirectory;
    $fileO = $filename;    
    $wantedHeight = $wantedHeight;

    // $imageResized =""; // la variable dans laquelle on va stocker l'image en tant que ressource
    $scale = ""; // l'échelle de réduction/augmentation qui sera appliquée

    // on charge les informations intrinsèques de l'image (le contenu du fichier) dans un tableau $array
    $array = getimagesize( "./uploads/pictures/".$fileO);
    
    $widthO = $array[0];
    $heightO = $array[1];
    $type = $array[2];

    // si la hauteur originale de l'image est plus grande que la hauteur souhaitée (wantedHeight)
    if ($heightO > $wantedHeight) {
        // on calcule l'échelle pour réduire la hauteur originale à hauteur souhaitée (wantedHeight)
        $scale = $heightO/$wantedHeight;  
        $newHeight = $heightO / $scale;
        $newWidth = $widthO / $scale;  
        // on crée une image couleur vide aux nouvelles dimensions   
        $imageResized = imagecreatetruecolor($newWidth,$newHeight);          
    }else { 
        // sinon on calcule l'échelle pour agrandir la hauteur originale à hauteur souhaitée (wantedHeight)
        $scale = $wantedHeight/$heightO;
        $newHeight = $heightO * $scale;
        $newWidth = $widthO * $scale; 
        // on crée une image couleur vide aux nouvelles dimensions   
        $imageResized = imagecreatetruecolor($newWidth,$newHeight); 
    }

    // en fonction du type de fichier (1:gif, 2:jpeg,4:png,64:bmp)
    switch ($type) {
        case '1': // GIF  
            // on génère le nouveau nom de fichier pour l'image resized          
            $ext = substr($fileO, strpos($fileO, ".") ); // récupère l'extension (avec le point)
            $file = substr($fileO,0, -(strlen($ext))); //  supprime le point et l'extension 
            $fileNew = $file.'-H200'.$ext; // génère le nouveau nom de fichier complet avec extension
            
            // on génère une ressource image        
            $image = imagecreatefromgif($fileO);
            
            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled($imageResized,$image,0,0,0,0,$newWidth,$newHeight,$widthO,$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif($imageResized,$pictureDirectory,$fileNew);

            break;
        case '2': // JPG/JPEG
            /// on génère le nouveau nom de fichier pour l'image resized          
            $ext = substr($fileO, strpos($fileO, ".") ); // récupère l'extension (avec le point)
            $file = substr($fileO,0, -(strlen($ext))); //  supprime le point et l'extension 
            $fileNew = $file.'-H200'.$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            $image = imagecreatefromjpeg("./uploads/pictures/".$fileO);
            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled($imageResized,$image,0,0,0,0,$newWidth,$newHeight,$widthO,$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagejpeg($imageResized,$pictureDirectory,-1);

            break;
        case '4': // PNG
            // on génère le nouveau nom de fichier pour l'image resized          
            $ext = substr($fileO, strpos($fileO, ".") ); // récupère l'extension (avec le point)
            $file = substr($fileO,0, -(strlen($ext))); //  supprime le point et l'extension 
            $fileNew = $file.'-H200'.$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            $image = imagecreatefrompng($fileO);

            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled($imageResized,$image,0,0,0,0,$newWidth,$newHeight,$widthO,$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagepng($imageResized,$pictureDirectory,$fileNew);

            break;

        case '64': // BMP
            // on génère le nouveau nom de fichier pour l'image resized          
            $ext = substr($fileO, strpos($fileO, ".") ); // récupère l'extension (avec le point)
            $file = substr($fileO,0, -(strlen($ext))); //  supprime le point et l'extension 
            $fileNew = $file.'-H200'.$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            $image = imagecreatefrombmp($fileO);

            // on échantillonne la ressource image créée dans l'image vide 
            imagecopyresampled($imageResized,$image,0,0,0,0,$newWidth,$newHeight,$widthO,$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagebmp($imageResized,$pictureDirectory,$fileNew);

            break; 
    }
    return;
    
} //EO function resizeOnHeight


function resizeOnWidth($pictureDirectory, $filename, $wantedWidth){
    $pictureDirectory = $pictureDirectory;
    $file = $filename;
    $width = $wantedWidth;
    // dump($file.'-'.$height);
    // die;
} //EO function resize


function resizeOnSize($pictureDirectory, $filename, $wantedWidth, $wantedHeight){
    $pictureDirectory = $pictureDirectory;
    $file = $filename;
    $width = $wantedWidth;
    $height = $wantedHeight;

}

