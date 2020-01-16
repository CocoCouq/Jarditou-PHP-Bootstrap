<!-- Hearder -->
<?php
    $Home = '../Views/Home';
    $Produits = '../Views/Produits';
    $Contact = '../Views/Formulaires';
    include '../Views/header.php';
    //Recupération des données
    $ProdId = $_POST['prodIDphoto'];
    $infosFile = pathinfo($_FILES['ImgPro']['name']);
    $extension = $infosFile[extension];
    $FileName = $ProdId.$extension;
    // Requete SQL
    $requete = 'UPDATE produits SET pro_photo="'.$extension.'" WHERE pro_id ='.$ProdId;
    $db->query($requete);
?>

<?php

$direct = '/Applications/MAMP/htdocs/5-Formulaire/assets/images/';
$uploadfile = $direct.basename($_FILES['ImgPro']['name']);
move_uploaded_file ($_FILES['ImgPro']['tmp_name'] , $uploadfile);
rename ('/Applications/MAMP/htdocs/5-Formulaire/assets/images/'.basename($_FILES['ImgPro']['name']), '/Applications/MAMP/htdocs/5-Formulaire/assets/images/'.$ProdId.'.'.$extension);

echo "<p class='h2'>Image ajouté</p>";
?>


<!-- Footer -->
<?php include '../Views/footer.php' ?>
