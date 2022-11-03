// Fonction de prévisualisation des images choisies parmi celles de la bdd
// Se déclenche à chaque changement du champ savedPictures (la liste de choix multiple)

$('#carousel_savedPictures').change(function(){
    preview = $('#previewSaved'); // le container div#previewSaved
    preview.empty(); // vide le container
    count = $("#carousel_savedPictures option:selected").length; // ccompte le nbre d'éléments sélectionnés

    for (let i = 0; i < count; i++) {
        // ajoute une balise html <img>, affecte un id unique à chaque balise
        preview.append('<img class="shadow-sm p-3 mb-3 bg-body rounded" id="img-'+i+'" >');    
    }
            
    files =[]; // l'array qui contient les images sélectionnées
    $("#carousel_savedPictures option:selected").each(function(i){
        // rappel - la liste de choix présente les images sous la forme titre - (filename)
        // On extrait le filename en 2 opérations
        file =  $(this).text().split("("); // 1) on récupère la chaine de caractères après la parenthèse
        file = file[1].slice(0,-1);  // 2) on supprime le dernier caractère de la chaine récupérée (la parenthèse fermante)              
        files.push(file); // on ajoute le nom de fichier dans le tableay files     
    });
          
    // on boucle sur chacun des éléments du tableau files 
    for (let i = 0; i < files.length; i++) {
        const element = files[i]; // on indique l'élément courant
        // on crée une requête ajax pour interroger le serveur
        fetch("/../../uploads/pictures/"+element) // va chercher le fichier demandé à cette adresse url
        .then((response) => response.blob()) // stocke les données binaires récupérées sous forme de blob
        .then((blob) => {
            objectURL = URL.createObjectURL(blob); // convertit la donnée blob en URL
            document.querySelector('#img-'+i).src=objectURL; // attribue l'URL générée à l'attribut src de la balise image
        });
    }
}) //EO change