<!-- Hearder -->
<?php include 'header.php';?>
<!-- Requete SQL -->
<?php
  $idProduit = $_POST['DeleteButton'];
  $requete = "DELETE FROM produits WHERE pro_id = $idProduit";
  $result = $db->query($requete);
  verifObj($result);
?>
<!-- ******************************DELETE*********************************** -->
<br><h1>Produit nº<?php echo $idProduit;?> supprimé</h1>

<!-- Footer -->
<?php include 'footer.php' ?>
