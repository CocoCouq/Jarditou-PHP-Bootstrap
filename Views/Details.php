<?php include 'header.php';?>
<?php
//  SELECT de la table produits (j'utilise WHERE et $_POST pour me situer sur la table)
    $requete = "SELECT pro_prix, pro_libelle, pro_id, pro_couleur, pro_ref, pro_description, pro_d_ajout, pro_d_modif, pro_bloque, pro_stock, pro_photo FROM produits WHERE pro_libelle = '{$_POST['Detail']}' ";
    $result = $db->query($requete);
    verifObj($result);
// Avec fecth je vais chercher la ligne qui correspond
    $row = $result->fetch();
?>
<form action="Insert.php" method="post">
    <label class="h2" for="ID">ID</label><br><input class="form-control col-lg-4" type="text" name="ID" value="<?php echo $row->pro_id; ?>" readonly><br>
    <label class="h2" for="Ref">References</label><br><input class="form-control col-lg-4" type="text" name="Ref" value="<?php echo $row->pro_ref; ?>"><br>
    <label class="h2" for="Libel">Libellé</label><br><input class="form-control col-lg-4" type="text" name="Libel" value="<?php echo $row->pro_libelle; ?>"><br>
    <label class="h2" for="Descrip">Description</label><br><textarea class="form-control col-lg-4" rows="5" name="Descrip"><?php echo $row->pro_description; ?></textarea><br>
    <label class="h2" for="Prix">Prix</label><br><input class="form-control col-lg-4" type="text" name="Prix" value="<?php echo $row->pro_prix; ?>"><br>
    <label class="h2" for="Couleur">Couleur</label><br><input class="form-control col-lg-4" type="text" name="Couleur" value="<?php echo $row->pro_couleur; ?>"><br>
    <label class="h2" for="Stock">Stock</label><br><input class="form-control col-lg-4" type="text" name="Stock" value="<?php echo $row->pro_stock; ?>"><br>
    <p>Date d'ajout : <?php echo $row->pro_d_ajout; ?></p>
    <p>Date de modification : <?php echo $row->pro_d_modif; ?></p>

<?php
//  Gestion de l'option 'bloqué' (== 1 si bloqué)
    if ($row->pro_bloque == 1)
    {
?>
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" checked>
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Bloqué</h5></label>
    </div><br>
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Non Bloqué</h5></label>
    </div>
<?php
    }
    //  Si le produit n'est pas bloqué
    else{
  ?>
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Bloqué</h5></label>
    </div><br>
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" checked>
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Non Bloqué</h5></label>
    </div><br>
<?php
    }
// Fin else
?>
    <br>
<!-- Format photo -->
    <label for="Extension"><h5>Format Photo</h5></label><br><input class="form-control col-lg-4" type="text" name="Extension" value="<?php echo $row->pro_photo; ?>">
    <section class="col-lg-5 text-center">
  <!-- Envoyer / Annuler -->
        <br><input class="btn btn-primary col-5" type="submit" name="Envoyer" value="Envoyer">
        <a class="btn btn-outline-primary col-5" href="Produits.php">Annuler</a><br><br>
  <!-- Ajout de produit -->
        <a class="btn btn-info col-12" href="AjoutProduit.php">Ajouter un Produit</a><br>
    </section><br>
</form>

<?php include 'footer.php' ?>
