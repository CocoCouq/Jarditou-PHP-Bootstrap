<!-- Hearder -->
<?php include 'header.php';?>
<!-- Traitement formulaire + Requete SQL -->
<?php
// Récupération des donné de la page Details.php
    $id = $_POST['ID'];
    $stock = $_POST['Stock'];
    $prix = $_POST['Prix'];
    $libelle = $_POST['Libel'];
    $reference = $_POST['Ref'];
    $descrip = $_POST['Descrip'];
    $couleur = $_POST['Couleur'];
    $today = date("Y-m-d H:i:s"); // Recuperation de la date du jour (heure Unix - donc décalée d'une heure)
    $bloq = $_POST['inlineRadioOptions'];
    $photo = $_POST['Extension'];
// requete du UDATE de la table produits avec les valeurs du formulaire de produits
    $requete = "UPDATE produits SET pro_stock=$stock, pro_prix=$prix, pro_libelle='$libelle', pro_ref='$reference', pro_description='$descrip', pro_couleur='$couleur', pro_d_modif='$today', pro_bloque='$bloq', pro_photo='$photo' WHERE pro_id = $id";
    $db->query($requete);
?>

<!-- ******************************UPDATE*********************************** -->
<section class="col-10 offset-1 text-center">
    <p><h1>ID</h1></p>
    <p class="prix"><?php echo $id; ?></p><br>
    <p><h1>Référence</h1></p>
    <p class="prix"><?php echo $reference; ?></p><br>
    <p><h1>Libellé</h1></p>
    <p class="prix"><?php echo $libelle; ?></p><br>
    <p><h1>Description</h1></p>
    <p class="prix"><?php echo $descrip; ?></p><br>
    <p><h1>Prix</h1></p>
    <p class="prix"><?php echo $prix; ?></p><br>
    <p><h1>Couleur</h1></p>
    <p class="prix"><?php echo $couleur; ?></p><br>
    <p><h1>Stock</h1></p>
    <p class="prix"><?php echo $stock; ?></p><br>
    <p><h1>Date de modification</h1></p>
    <p class="prix"><?php echo $today; ?></p><br>
    <p><h1>Bloqué</h1></p>
    <p class="prix">
<?php
    // Si le produit est bloqué (Utilisation des value de Details.php)
    if ($bloq == 1)
        echo 'Produit bloqué';
    else
        echo 'Produit non-bloqué';
    echo "<h1>Format de Photo : "."$photo"."</h1>";
   ?></p><br>
</section>

<!-- Footer -->
<?php include 'footer.php' ?>
