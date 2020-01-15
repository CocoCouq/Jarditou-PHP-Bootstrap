<!-- Hearder -->
<?php
    $Home = '../Views/Home';
    $Produits = '../Views/Produits';
    $Contact = '../Views/Formulaires';
    include '../Views/header.php';
?>
<!-- Requete SQL -->
<?php
  $idProduit = $_POST['DeleteButton'];
  $requete = "DELETE FROM produits WHERE pro_id = $idProduit";
  $result = $db->query($requete);
  verifObj($result);
?>
<!-- ******************************DELETE*********************************** -->
<h1 class="mt-4">Produit nº<?php echo $idProduit;?> supprimé</h1>

<!-- Footer -->
<?php include '../Views/footer.php' ?>
