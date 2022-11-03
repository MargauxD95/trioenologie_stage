// Fonction de prévisualisation des images uploadées
// Se déclenche à chaque changement du champ d'upload
$('#gallery_pictures').change(function(){
            
    var files = $("#gallery_pictures")[0].files; // on crée un array "files" qui récupère les fichiers uploadés dans le champ #gallery_pictures
    var preview = $('#previewUpload'); // on crée la variable "preview" qui identifie le container dans lequel on montrera les images
            
    // pour chaque fichier i en partant du premier (0), jusqu'au dernier fichier trouvé, à chaque tour de boucle on passe au fichier suivant (i++)
    for (var i = 0; i < files.length; i++) {
        var file = files[i]; // on crée une variable file qui contient le fichier en cours
        var img = document.createElement("img"); // on crée un élément html <img> dans le document
        img.classList.add("shadow-sm", "p-3", "mb-3", "bg-body", "rounded"); // on crée la liste des classes que l'on veut ajouter à l'image
        img.file = file; // on déclare que l'image à afficher est celle du fichier en cours
        preview.append(img);  // on ajoute la balise html dans le container preview


        var reader = new FileReader(); // on crée un moyen de lire l'information
        // au chargment du reader on obtient un résultat binaire du contenu du fichier
        reader.onload = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);                
        reader.readAsDataURL(file);// le reader décode le fichier binaire et le convertit en données HTML 
    }

})