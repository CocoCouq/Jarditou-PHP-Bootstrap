<!-- Hearder -->
<?php
    $Home = 'Home';
    $Produits = 'Produits';
    $Contact = 'Formulaires';
    include 'header.php';
?>
<!-- Requete SQL -->
<?php
    //  SELECT de la table categories pour les 'options' du 'select'
    $requete = "SELECT cat_id, cat_nom FROM categories";
    $categ = $db->query($requete);
    verifObj($categ);
 ?>

<!-- **************************Ajout de Produits**************************** -->
<form class="mb-3" action="../Models/Ajout.php" method="post">
    <label for="Categ" class="h2 mb-3 mt-5">Catégories</label>
    <select class="col-lg-4 form-control mb-3" name="Categ">
        <option value="CHOIX">Choisissez</option>
<!-- Aller chercher les categories -->
<?php while ($categorie = $categ->fetch()) { ?>
    <option value="<?php echo "$categorie->cat_id"; ?>"><?php echo "$categorie->cat_nom"; ?></option>
<?php } ?> <!-- fin while -->
    </select>
    <label class="h2" for="Ref">References</label><br><input class="form-control col-lg-4 mb-4" type="text" name="Ref">
    <label class="h2" for="Libel">Libellé</label><br><input class="form-control col-lg-4 mb-4" type="text" name="Libel">
    <label class="h2" for="Descrip">Description</label><br><textarea class="form-control col-lg-4 mb-4" rows="5" name="Descrip"></textarea>
    <label class="h2" for="Prix">Prix</label><br><input class="form-control col-lg-4 mb-4" type="text" name="Prix">
    <label class="h2" for="Couleur">Couleur</label><br><input class="form-control col-lg-4 mb-4" type="text" name="Couleur">
    <label class="h2" for="Stock">Stock</label><br><input class="form-control col-lg-4 mb-4" type="text" name="Stock">
    <!-- Definition des valeur 1 et 0 pour bloqué -->
    <div class="form-check form-check-inline">
        <input class="radI form-check-input ml-1 mb-3" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1"> <!-- Value = 1 -->
        <label class="radI form-check-label ml-2 mb-2" for="inlineRadio1"><h5 class="largContact2">Bloqué</h5></label> <!-- Value = 0 -->
    </div>
    <div class="form-check form-check-inline mb-3">
        <input class="radI form-check-input ml-5 mb-3" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" checked>
        <label class="radI form-check-label ml-2 mb-2" for="inlineRadio1"><h5 class="largContact2">Non Bloqué</h5></label>
    </div>
    <section class="col-lg-3 offset-lg-0 offset-1 mb-4">
        <input class="btn btn-primary col-5" type="submit" name="Envoyer" value="Ajouter">
        <a class="btn btn-outline-primary col-5" href="Produits.php">Annuler</a>
    </section>
</form>
<!-- Footer -->
<?php include 'footer.php' ?>
