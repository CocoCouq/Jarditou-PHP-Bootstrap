<!-- Hearder -->
<?php include 'header.php';?>
<!-- Requete SQL -->
<?php
    //  SELECT de la table categories pour les 'options' du 'select'
    $requete = "SELECT cat_id, cat_nom FROM categories";
    $categ = $db->query($requete);
    verifObj($categ);
 ?>

<!-- **************************Ajout de Produits**************************** -->
<form action="Ajout.php" method="post">
    <label for="Categ" class="h2">Catégories</label><br>
    <select class="col-4 form-control" name="Categ">
        <option value="CHOIX">Choisissez</option>
<!-- Aller chercher les categories -->
<?php while ($categorie = $categ->fetch()) { ?>
    <option value="<?php echo "$categorie->cat_id"; ?>"><?php echo "$categorie->cat_nom"; ?></option>
<?php } ?> <!-- fin while -->
    </select><br>
    <label class="h2" for="Ref">References</label><br><input class="form-control col-md-4" type="text" name="Ref"><br>
    <label class="h2" for="Libel">Libellé</label><br><input class="form-control col-md-4" type="text" name="Libel"><br>
    <label class="h2" for="Descrip">Description</label><br><textarea class="form-control col-md-4" rows="5" name="Descrip"></textarea><br>
    <label class="h2" for="Prix">Prix</label><br><input class="form-control col-md-4" type="text" name="Prix"><br>
    <label class="h2" for="Couleur">Couleur</label><br><input class="form-control col-md-4" type="text" name="Couleur"><br>
    <label class="h2" for="Stock">Stock</label><br><input class="form-control col-md-4" type="text" name="Stock"><br>
    <!-- Definition des valeur 1 et 0 pour bloqué -->
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1"> <!-- Value = 1 -->
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Bloqué</h5></label> <!-- Value = 0 -->
    </div><br>
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" checked>
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Non Bloqué</h5></label>
    </div>
    <br>
    <section class="col-md-5 text-center">
        <input class="btn btn-primary col-5" type="submit" name="Envoyer" value="Ajouter">
        <a class="btn btn-outline-primary col-5" href="Produits.php">Annuler</a><br><br>
    </section><br>
</form>

<!-- Footer -->
<?php include 'footer.php' ?>
