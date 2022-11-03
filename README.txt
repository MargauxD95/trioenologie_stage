------------------------------------
RECUPERATION ET INSTALLATION
------------------------------------
- Dans la BDD :
    -> Suppression tables de jointure (gallery_picture, carousel_picture) PUIS Suppression tables Gallery et Carousel
    -> vider la table "doctrine_migration_versions"

- Dans VSCode
    - Démarrer une nouvelle session (un VSCode vide)
    - Cloner le projet (soit par l'interface soit en ligne de commande :  git clone https://github.com/MargauxD95/trioenologie)
    - Une fois le projet cloné, Supprimer les fichiers de migration 

    - Dans le terminal lancer la commande : composer require symfony/runtime

    - Faire une migration comme d'hab pour mettre tout à jour (make:migration puis d:m:m) et normalement ça roule :)


------------------------------------
ETAT DU PROJET 
------------------------------------

- Refactoring du code dans Picture et Article 
    -> la table Picture s'est enrichie de 3 propriétés (name, pictureFileH200, pictureFileH400)
    -> j'ai créé un fichier dans templates/includes/ImagesProcessing.php, dans lequel sont rasssemblées toutes les fonctions de traitement des images (uploads et resizing)
        Les fonctions de resizing fonctionnent SAUF QUE j'ai un problème de permission qd il s'agit d'enregistrer l'image redimensionnée.
        "Failed to open stream: Permission denied" du coup ben ... ça marche pas :( donc l'appel à fonction est en commentaire, (on décommentera qd le pb sera résolu)
             Je pense que c'est lié à ça 
                https://symfony.com/doc/current/setup/file_permissions.html#2-use-the-same-user-for-the-cli-and-the-web-server
    
            sauf que je sais pas comment on modifie ça dans le fichier de config Apache (je sais pas quel est le User pour CLI et celui pour Apache)
            -->  Tu pourrais peut être demander à Bart ?

    -> Dans les choiceTypes qui permettent de sélectionner les images en BDD j'ai ajouté le nom du fichier entre parenthèses, c'est indispensable pour les autres traitements d'image (resizing, et appel dans les autres entités)

- Carousel 
    ça marche mais tant que le resizing des images ne fonctionne pas automatiquement il faut mettre des images de meme hauteur dans le carousel
    j'ai une piste pour faire fonctionner CollectionType

- Au niveau du css
    Mes ajouts sont à la fin de style.css
    + J'ai fait qqes modifs dans le footer
    Sinon tout ce que j'ai fait en mise en page c'est de la classe bootstrap
    Pour les formulaires que j'ai modifié c'est que c'est comme ça que je les veux ;)


JE DOIS ENCORE TERMINER:
    Refactoring du code Gallery et Carousel
    Tester la solution pour CollectionType (sinon on laisse comme ça pour l'instant, ça fonctionne )
    Voir si les choiceTypes utilisés pour sélectionner les images peuvent utiliser "name" et si "name" est vide utiliser "title"
    Résoudre cette histoire de permissions.


NORMALEMENT au niveau du code et de la structure du projet ça ne devrait plus bouger de manière significative.

TU PEUX :
    -> t'occuper de finaliser le Front, pour le BackOffice pour le moment ne touche pas à Carousel, Article et Picture, sur lesquels je dois encore bosser un peu.