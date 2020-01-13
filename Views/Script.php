<!-- Hearder -->
<?php include 'header.php'; ?>
<!-- Traitement formulaire + Requete SQL -->
<?php
// Recuperation des donées du formulaire
    $prenom = $_POST['prénom'];
    $nom = $_POST['nom'];
    $sexe = $_POST['inlineRadioOptions'];
    $born = $_POST['Date'];
    $adress = $_POST['Adresse'];
    $city = $_POST['Ville'];
    $CodeP = $_POST['CodePostal'];
    $mail = $_POST['Email'];
    $subj = $_POST['Sujet'];
    $quest = $_POST['Questions'];

    echo "<h1>Coordonnées</h1>";
?>
<section class="prix">
<?php
    echo "Prénom : ".$prenom."<br>";
    echo "Nom : ".$nom."<br>";
    echo "Sexe : ".$sexe."<br>";
    echo "Né le : ".$born."<br>";
    echo "Adresse : ".$adress."<br>";
    echo "Ville : ".$city."<br>";
    echo "Code Postal : ".$CodeP."<br>";
    echo "Email : ".$mail."<br>";
?>
</section>
<?php
    echo "<br><h1>Demande</h1>";
?>
<section class="prix">
<?php
    echo "Sujet : ".$subj."<br>";
    echo "<br>Question : ".$quest."<br><br>";

    //  Si le tableau d'erreur est rempli j'affiche les erreurs dans le script
    if (count($Erreurs) != 0)
    {
        echo "<h1>Non Pris en compte</h1>";
        foreach ($Erreurs as $key => $value)
        echo $key." : ".$value;
    }
?>
</section>

   <!-- Footer -->
<?php include 'footer.php' ?>
