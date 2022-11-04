<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* includes/imagesProcessingOLD.php */
class __TwigTemplate_4a09192575deddbf657ae79f400b7904 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/imagesProcessingOLD.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/imagesProcessingOLD.php"));

        // line 1
        echo "<?php
use App\\Entity\\Picture;
use App\\Repository\\PictureRepository;
use Doctrine\\ORM\\EntityManagerInterface;


function upload(\$form, \$pictureDirectory, \$pictureRepository){
    \$pictureRepository = \$pictureRepository;
    \$form = \$form;
    \$pictureDirectory = \$pictureDirectory;
    
    
    // on récupère les images transmises dans le champ d'upload (pictures)
    \$pictures = \$form->get('pictures')->getData();
    // on boucle sur les images uploadées
    foreach(\$pictures as \$picture){

        // on instancie un objet Picture dont on initialise les valeurs
        \$pict = new Picture();

        // on attribue un nom de fichier unique à l'image téléchargée
        \$nomPict = date('YmdHis') . \"-\" . uniqid() . \".\" . \$picture->getClientOriginalExtension();
        
        //on récupère le nom de fichier original de l'image
        \$originalName = \$picture->getClientOriginalName();

        // on vérifie qu'une image avec cet originalName n'existe pas déjà  
        // s'il existe une image avec le même originalName dans la bdd
            if (\$pictureRepository->findOneByTitle(\$originalName)) {
                continue; // on stoppe le traitement pour cette image et on repart en haut de la boucle pour l'itération suivante               
            } else {
                // on enregistre l'image dans le répertoire uploads/pictures (image physique)
                \$picture->move(
                    \$pictureDirectory,
                    \$nomPict
                ); // EO move
        
                // maintenant que l'image est physiquement enregistrée dans le répertoire uploads/pictures  
                // on récupère les infos size du fichier dans un array ([0]=width [1]=height)
                \$array = getimagesize( \"./uploads/pictures/\".\$nomPict);      
        
        
                \$pict->setTitle(\$originalName); 
                \$pict->setPictureFile(\$nomPict);
                \$pict->setWidth(\$array[0]); // on affecte la valeur Width à la propriété Width
                \$pict->setHeight(\$array[1]); // on affecte la valeur Height à la propriété Height
            }    
        
        

        return \$pict;
    }
  
} // EO function upload


function resizeOnHeight(\$pictureDirectory, \$filename, \$wantedHeight ){
    \$pictureDirectory = \$pictureDirectory;
    \$fileO = \$filename;    
    \$wantedHeight = \$wantedHeight;

    // \$imageResized =\"\"; // la variable dans laquelle on va stocker l'image en tant que ressource
    \$scale = \"\"; // l'échelle de réduction/augmentation qui sera appliquée

    // on charge les informations intrinsèques de l'image (le contenu du fichier) dans un tableau \$array
    \$array = getimagesize( \"./uploads/pictures/\".\$fileO);
    
    \$widthO = \$array[0];
    \$heightO = \$array[1];
    \$type = \$array[2];

    // si la hauteur originale de l'image est plus grande que la hauteur souhaitée (wantedHeight)
    if (\$heightO > \$wantedHeight) {
        // on calcule l'échelle pour réduire la hauteur originale à hauteur souhaitée (wantedHeight)
        \$scale = \$heightO/\$wantedHeight;  
        \$newHeight = \$heightO / \$scale;
        \$newWidth = \$widthO / \$scale;  
        // on crée une image couleur vide aux nouvelles dimensions   
        \$imageResized = imagecreatetruecolor(\$newWidth,\$newHeight);          
    }else { 
        // sinon on calcule l'échéchelle pour agrandir la hauteur originale à hauteur souhaitée (wantedHeight)
        \$scale = \$wantedHeight/\$heightO;
        \$newHeight = \$heightO * \$scale;
        \$newWidth = \$widthO * \$scale; 
        // on crée une image couleur vide aux nouvelles dimensions   
        \$imageResized = imagecreatetruecolor(\$newWidth,\$newHeight); 
    }

    // en fonction du type de fichier (1:gif, 2:jpeg,4:png,64:bmp)
    switch (\$type) {
        case '1': // GIF  
            // on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension
            
            // on génère une ressource image        
            \$image = imagecreatefromgif(\$fileO);
            
            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break;
        case '2': // JPG/JPEG
            /// on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            \$image = imagecreatefromjpeg(\$fileO);
            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break;
        case '4': // PNG
            // on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            \$image = imagecreatefrompng(\$fileO);

            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break;

        case '64': // BMP
            // on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            \$image = imagecreatefrombmp(\$fileO);

            // on échantillonne la ressource image créée dans l'image vide 
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break; 
    }
    
} //EO function resizeOnHeight


function resizeOnWidth(\$pictureDirectory, \$filename, \$wantedWidth){
    \$pictureDirectory = \$pictureDirectory;
    \$file = \$filename;
    \$width = \$wantedWidth;
    // dump(\$file.'-'.\$height);
    // die;
} //EO function resize


function resizeOnSize(\$pictureDirectory, \$filename, \$wantedWidth, \$wantedHeight){
    \$pictureDirectory = \$pictureDirectory;
    \$file = \$filename;
    \$width = \$wantedWidth;
    \$height = \$wantedHeight;

}

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/imagesProcessingOLD.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
use App\\Entity\\Picture;
use App\\Repository\\PictureRepository;
use Doctrine\\ORM\\EntityManagerInterface;


function upload(\$form, \$pictureDirectory, \$pictureRepository){
    \$pictureRepository = \$pictureRepository;
    \$form = \$form;
    \$pictureDirectory = \$pictureDirectory;
    
    
    // on récupère les images transmises dans le champ d'upload (pictures)
    \$pictures = \$form->get('pictures')->getData();
    // on boucle sur les images uploadées
    foreach(\$pictures as \$picture){

        // on instancie un objet Picture dont on initialise les valeurs
        \$pict = new Picture();

        // on attribue un nom de fichier unique à l'image téléchargée
        \$nomPict = date('YmdHis') . \"-\" . uniqid() . \".\" . \$picture->getClientOriginalExtension();
        
        //on récupère le nom de fichier original de l'image
        \$originalName = \$picture->getClientOriginalName();

        // on vérifie qu'une image avec cet originalName n'existe pas déjà  
        // s'il existe une image avec le même originalName dans la bdd
            if (\$pictureRepository->findOneByTitle(\$originalName)) {
                continue; // on stoppe le traitement pour cette image et on repart en haut de la boucle pour l'itération suivante               
            } else {
                // on enregistre l'image dans le répertoire uploads/pictures (image physique)
                \$picture->move(
                    \$pictureDirectory,
                    \$nomPict
                ); // EO move
        
                // maintenant que l'image est physiquement enregistrée dans le répertoire uploads/pictures  
                // on récupère les infos size du fichier dans un array ([0]=width [1]=height)
                \$array = getimagesize( \"./uploads/pictures/\".\$nomPict);      
        
        
                \$pict->setTitle(\$originalName); 
                \$pict->setPictureFile(\$nomPict);
                \$pict->setWidth(\$array[0]); // on affecte la valeur Width à la propriété Width
                \$pict->setHeight(\$array[1]); // on affecte la valeur Height à la propriété Height
            }    
        
        

        return \$pict;
    }
  
} // EO function upload


function resizeOnHeight(\$pictureDirectory, \$filename, \$wantedHeight ){
    \$pictureDirectory = \$pictureDirectory;
    \$fileO = \$filename;    
    \$wantedHeight = \$wantedHeight;

    // \$imageResized =\"\"; // la variable dans laquelle on va stocker l'image en tant que ressource
    \$scale = \"\"; // l'échelle de réduction/augmentation qui sera appliquée

    // on charge les informations intrinsèques de l'image (le contenu du fichier) dans un tableau \$array
    \$array = getimagesize( \"./uploads/pictures/\".\$fileO);
    
    \$widthO = \$array[0];
    \$heightO = \$array[1];
    \$type = \$array[2];

    // si la hauteur originale de l'image est plus grande que la hauteur souhaitée (wantedHeight)
    if (\$heightO > \$wantedHeight) {
        // on calcule l'échelle pour réduire la hauteur originale à hauteur souhaitée (wantedHeight)
        \$scale = \$heightO/\$wantedHeight;  
        \$newHeight = \$heightO / \$scale;
        \$newWidth = \$widthO / \$scale;  
        // on crée une image couleur vide aux nouvelles dimensions   
        \$imageResized = imagecreatetruecolor(\$newWidth,\$newHeight);          
    }else { 
        // sinon on calcule l'échéchelle pour agrandir la hauteur originale à hauteur souhaitée (wantedHeight)
        \$scale = \$wantedHeight/\$heightO;
        \$newHeight = \$heightO * \$scale;
        \$newWidth = \$widthO * \$scale; 
        // on crée une image couleur vide aux nouvelles dimensions   
        \$imageResized = imagecreatetruecolor(\$newWidth,\$newHeight); 
    }

    // en fonction du type de fichier (1:gif, 2:jpeg,4:png,64:bmp)
    switch (\$type) {
        case '1': // GIF  
            // on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension
            
            // on génère une ressource image        
            \$image = imagecreatefromgif(\$fileO);
            
            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break;
        case '2': // JPG/JPEG
            /// on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            \$image = imagecreatefromjpeg(\$fileO);
            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break;
        case '4': // PNG
            // on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            \$image = imagecreatefrompng(\$fileO);

            // on échantillonne la ressource image créée dans l'image vide
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break;

        case '64': // BMP
            // on génère le nouveau nom de fichier pour l'image resized          
            \$ext = substr(\$fileO, strpos(\$fileO, \".\") ); // récupère l'extension (avec le point)
            \$file = substr(\$fileO,0, -(strlen(\$ext))); //  supprime le point et l'extension 
            \$fileNew = \$file.'-H200'.\$ext; // génère le nouveau nom de fichier complet avec extension

            // on génère une ressource image 
            \$image = imagecreatefrombmp(\$fileO);

            // on échantillonne la ressource image créée dans l'image vide 
            imagecopyresampled(\$imageResized,\$image,0,0,0,0,\$newWidth,\$newHeight,\$widthO,\$heightO);
            
            // on enregistre dans le dossier uploads/pictures/H200
            imagegif(\$imageResized,\$pictureDirectory,\$fileNew);

            break; 
    }
    
} //EO function resizeOnHeight


function resizeOnWidth(\$pictureDirectory, \$filename, \$wantedWidth){
    \$pictureDirectory = \$pictureDirectory;
    \$file = \$filename;
    \$width = \$wantedWidth;
    // dump(\$file.'-'.\$height);
    // die;
} //EO function resize


function resizeOnSize(\$pictureDirectory, \$filename, \$wantedWidth, \$wantedHeight){
    \$pictureDirectory = \$pictureDirectory;
    \$file = \$filename;
    \$width = \$wantedWidth;
    \$height = \$wantedHeight;

}

", "includes/imagesProcessingOLD.php", "C:\\Users\\magau\\OneDrive\\Documents\\GitHub\\trioenologie\\templates\\includes\\imagesProcessingOLD.php");
    }
}
