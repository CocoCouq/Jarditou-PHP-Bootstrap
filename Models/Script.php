<!-- Hearder -->
<?php
    $Home = '../Views/Home';
    $Produits = '../Views/Produits';
    $Contact = '../Views/Formulaires';
    include '../Views/header.php';
?>
<!-- Traitement formulaire + Requete SQL -->
<?php
// Recuperation des donées du formulaire
    $prenom = htmlspecialchars($_POST['prénom']);
    $nom = htmlspecialchars($_POST['nom']);
    $sexe = htmlspecialchars($_POST['inlineRadioOptions']);
    $born = htmlspecialchars($_POST['Date']);
    $adress = htmlspecialchars($_POST['Adresse']);
    $city = htmlspecialchars($_POST['Ville']);
    $CodeP = htmlspecialchars($_POST['CodePostal']);
    $mail = htmlspecialchars($_POST['Email']);
    $subj = htmlspecialchars($_POST['Sujet']);
    $quest = htmlspecialchars($_POST['Questions']);

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
<?php include '../Views/footer.php' ?>
