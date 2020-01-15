<!-- Hearder -->
<?php
    $Home = '../Views/Home';
    $Produits = '../Views/Produits';
    $Contact = '../Views/Formulaires';
    include '../Views/header.php';
?>
<!-- Traitement formulaire + Requete SQL -->
<?php
// Récupération des donné de la page Details.php
    $id = htmlspecialchars($_POST['ID']);
    $stock = htmlspecialchars($_POST['Stock']);
    $prix = htmlspecialchars($_POST['Prix']);
    $libelle = htmlspecialchars($_POST['Libel']);
    $reference = htmlspecialchars($_POST['Ref']);
    $descrip = htmlspecialchars($_POST['Descrip']);
    $couleur = htmlspecialchars($_POST['Couleur']);
    $today = date("Y-m-d H:i:s"); // Recuperation de la date du jour (heure Unix - donc décalée d'une heure)
    $bloq = $_POST['inlineRadioOptions'];
    $photo = htmlspecialchars($_POST['Extension']);
// requete du UDATE de la table produits avec les valeurs du formulaire de produits
    $requete = "UPDATE produits SET pro_stock=$stock, pro_prix=$prix, pro_libelle='$libelle', pro_ref='$reference', pro_description='$descrip', pro_couleur='$couleur', pro_d_modif='$today', pro_bloque='$bloq', pro_photo='$photo' WHERE pro_id = $id";
    $db->query($requete);
?>

<!-- ******************************UPDATE*********************************** -->
<section class="col-10 offset-1 text-center mb-2">
    <p><h1>ID</h1></p>
    <p class="prix mb-3"><?php echo $id; ?></p>
    <p><h1>Référence</h1></p>
    <p class="prix mb-3"><?php echo $reference; ?></p>
    <p><h1>Libellé</h1></p>
    <p class="prix mb-3"><?php echo $libelle; ?></p>
    <p><h1>Description</h1></p>
    <p class="prix mb-3"><?php echo $descrip; ?></p>
    <p><h1>Prix</h1></p>
    <p class="prix mb-3"><?php echo $prix; ?></p>
    <p><h1>Couleur</h1></p>
    <p class="prix mb-3"><?php echo $couleur; ?></p>
    <p><h1>Stock</h1></p>
    <p class="prix mb-3"><?php echo $stock; ?></p>
    <p><h1>Date de modification</h1></p>
    <p class="prix mb-3"><?php echo $today; ?></p>
    <p><h1>Bloqué</h1></p>
    <p class="prix mb-3">
<?php
    // Si le produit est bloqué (Utilisation des value de Details.php)
    if ($bloq == 1)
        echo 'Produit bloqué';
    else
        echo 'Produit non-bloqué';
    echo "<h1>Format de Photo : "."$photo"."</h1>";
   ?></p>
</section>

<!-- Footer -->
<?php include '../Viewsfooter.php' ?>
