<!-- Hearder -->
<?php
    $Home = '../Views/Home';
    $Produits = '../Views/Produits';
    $Contact = '../Views/Formulaires';
    include '../Views/header.php';
?>
<!-- Traitement formulaire + Requete SQL -->
<?php
  // recupération des données du formulaire d'Ajout de produits
    $stock = htmlspecialchars($_POST['Stock']);
    $prix = htmlspecialchars($_POST['Prix']);
    $libelle = htmlspecialchars($_POST['Libel']);
    $reference = htmlspecialchars($_POST['Ref']);
    $descrip = htmlspecialchars($_POST['Descrip']);
    $couleur = htmlspecialchars($_POST['Couleur']);
    $today = date("Y-m-d H:i:s");
    $bloq = $_POST['inlineRadioOptions'];
    $categ = htmlspecialchars($_POST['Categ']);
  //  Insert de la table produits
    $requete = "INSERT INTO produits(pro_prix, pro_libelle, pro_couleur, pro_ref, pro_description, pro_d_ajout, pro_bloque, pro_stock, pro_cat_id)
    VALUE ($prix, '$libelle', '$couleur', '$reference', '$descrip', '$today', '$bloq', $stock, $categ)";
  //  Execution de la requete
    $result = $db->query($requete);
    verifObj($result);
?>
<!-- ******************************INSERT*********************************** -->
<p class="prix">LES VALEURS ONT ÉTÉ AJOUTÉS AVEC SUCCÈS</p>
<?php
  //  Affichage des données du produit
    echo "<h1>Catégorie : ".$categ."</h1>";
    echo "<h1>Libellé : ".$libelle."</h1>";
    echo "<h1>Référence : ".$reference."</h1>";
    echo "<h1>Prix : ".$prix."</h1>";
    echo "<h1>Stock : ".$stock."</h1>";
    echo "<h1>Description : ".$descrip."</h1>";
    echo "<h1>Couleur : ".$couleur."</h1>";
    echo "<h1>Ajout :".$today."</h1>";
    echo "<h1>Bloqué".$bloq."</h1>";
?>


<!-- Footer -->
<?php include '../Views/footer.php'; ?>
