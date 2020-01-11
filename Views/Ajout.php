<?php include 'header.php';?>
<?php
  // recupération des données du formulaire d'Ajout de produits
    $stock = $_POST['Stock'];
    $prix = $_POST['Prix'];
    $libelle = $_POST['Libel'];
    $reference = $_POST['Ref'];
    $descrip = $_POST['Descrip'];
    $couleur = $_POST['Couleur'];
    $today = date("Y-m-d H:i:s");
    $bloq = $_POST['inlineRadioOptions'];
    $categ = $_POST['Categ'];
  //  Insert de la table produits
    $requete = "INSERT INTO produits(pro_prix, pro_libelle, pro_couleur, pro_ref, pro_description, pro_d_ajout, pro_bloque, pro_stock, pro_cat_id)
    VALUE ($prix, '$libelle', '$couleur', '$reference', '$descrip', '$today', '$bloq', $stock, $categ)";
  //  Execution de la requete
    $result = $db->query($requete);
    verifObj($result);
?>
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

LES VALEURS ONT ÉTÉ AJOUTÉS AVEC SUCCÈS

<?php include 'footer.php' ;?>
