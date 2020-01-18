<!-- Hearder -->
<?php
    $Home = '../Views/Home';
    $Produits = '../Views/Produits';
    $Contact = '../Views/Formulaires';
    include '../Views/header.php';
    //Recupération des données
    $ProdId = htmlspecialchars($_POST['prodIDphoto']);
    $infosFile = pathinfo($_FILES['ImgPro']['name']);
    $extension = htmlspecialchars($infosFile[extension]);
    $tabExtension = ['jgp', 'png', 'jpeg'];
    $sizeImage = $_FILES['ImgPro']['size'];
    $sizeMax = $_POST['SizeImg'];
?>

<?php

$direct = '/Applications/MAMP/htdocs/5-Formulaire/assets/images/'; // Repertoire cible
$uploadfile = $direct.basename(htmlspecialchars($_FILES['ImgPro']['name'])); // Nom du fichier
if (move_uploaded_file ($_FILES['ImgPro']['tmp_name'] , $uploadfile)) // upload du fichier et vérification de l'upload
{
    if (in_array($extension, $tabExtension)) // Verification de l'extension
    {
        if ($sizeImage > $sizeMax) // Verification de la taille de la photo
            echo "<p class='alert alert-danger h2 text-center mt-3'>ECHEC<br>Image trop volumineuse</p>";
        else
        {
            rename ('/Applications/MAMP/htdocs/5-Formulaire/assets/images/'.basename(htmlspecialchars($_FILES['ImgPro']['name'])), '/Applications/MAMP/htdocs/5-Formulaire/assets/images/'.$ProdId.'.'.$extension);
            // Je renome la photo pour qu'elle corresponde à l'appel de son nom dans Produits.php
            echo "<p class='alert alert-warning h2'>Image ajouté avec succès.</p>";
            echo "<p class='alert alert-warning h4'>Si le produit possédé déjà une photo,  modification peut prendre plusieurs minutes a être appliquée.";
            echo "<p class='alert alert-danger h4'>Pour visualiser sans délais, effacé le cache de votre navigateur.
                  <br>(Historique => Afficher l'historique complet => Effacer les données de navigation => Effacer les données pour Images et fichiers en cache)";
            // Requete SQL - Changement de l'extension dans la base de donnée 
            $requete = 'UPDATE produits SET pro_photo="'.$extension.'" WHERE pro_id ='.$ProdId;
            $db->query($requete);
        }
    }
    else
        echo "<p class='alert alert-danger h3 mt-3'>Format non pris en charge</p>";
}
else
    echo "<p class='alert alert-danger h2 mt-3'>ECHEC DU CHARGEMENT";
?>

<!-- Footer -->
<?php include '../Views/footer.php' ?>
