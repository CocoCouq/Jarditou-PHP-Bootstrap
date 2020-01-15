<!-- Hearder -->
<?php
    $Home = 'Home';
    $Produits = 'Produits';
    $Contact = 'Formulaires';
    include 'header.php';
?>
<!-- Requete SQL -->
<?php
//  SELECT de la table produits (j'utilise WHERE et $_POST pour me situer sur la table)
    $requete = "SELECT pro_prix, pro_libelle, pro_id, pro_couleur, pro_ref, pro_description, pro_d_ajout, pro_d_modif, pro_bloque, pro_stock, pro_photo FROM produits WHERE pro_libelle = '{$_POST['Detail']}' ";
    $result = $db->query($requete);
    verifObj($result);
    $row = $result->fetch(); // Va chercher
?>

<!-- ******************************Détails********************************** -->
<form action="../Models/Insert.php" method="post">
    <label class="h2" for="ID">ID</label><br><input class="form-control col-lg-4 mb-3" type="text" name="ID" value="<?php echo $row->pro_id; ?>" readonly>
    <label class="h2" for="Ref">References</label><br><input class="form-control col-lg-4 mb-3" type="text" name="Ref" value="<?php echo $row->pro_ref; ?>">
    <label class="h2" for="Libel">Libellé</label><br><input class="form-control col-lg-4 mb-3" type="text" name="Libel" value="<?php echo $row->pro_libelle; ?>">
    <label class="h2" for="Descrip">Description</label><br><textarea class="form-control col-lg-4 mb-3" rows="5" name="Descrip"><?php echo $row->pro_description; ?></textarea>
    <label class="h2" for="Prix">Prix</label><br><input class="form-control col-lg-4 mb-3" type="text" name="Prix" value="<?php echo $row->pro_prix; ?>">
    <label class="h2" for="Couleur">Couleur</label><br><input class="form-control col-lg-4 mb-3" type="text" name="Couleur" value="<?php echo $row->pro_couleur; ?>">
    <label class="h2" for="Stock">Stock</label><br><input class="form-control col-lg-4 mb-3" type="text" name="Stock" value="<?php echo $row->pro_stock; ?>">
    <p>Date d'ajout : <?php echo $row->pro_d_ajout; ?></p>
    <p>Date de modification : <?php echo $row->pro_d_modif; ?></p>

<?php
//  Gestion de l'option 'bloqué' (== 1 si bloqué)
    if ($row->pro_bloque == 1)
    {
?>
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" checked> <!-- Value de bloqué definit à 1 ou 0 -->
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Bloqué</h5></label>
    </div><br>
    <div class="form-check form-check-inline">
        <input class="radI form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Non Bloqué</h5></label>
    </div>
<?php
    }
    //  Si le produit n'est pas bloqué (Utilisation de 'checked' dans le bouton radio)
    else{
  ?>
    <div class="form-check form-check-inline mb-3">
        <input class="radI form-check-input mb-2 ml-2" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Bloqué</h5></label>
    </div>
    <div class="form-check form-check-inline mb-3">
        <input class="radI form-check-input mb-2 ml-5" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0" checked>
        <label class="radI form-check-label ml-2" for="inlineRadio1"><h5 class="largContact2">Non Bloqué</h5></label>
    </div><br>
<?php } ?> <!-- fin else -->
<!-- Format photo -->
    <label for="Extension">Format Photo</label><br><input class="form-control col-lg-4 mb-5" type="text" name="Extension" value="<?php echo $row->pro_photo; ?>">
    <section class="col-lg-4 mb-2">

<!-- Envoyer / Annuler -->
<!-- ********** Modal de confirmation Modif ********** -->
<!-- Button Envoyer Modal -->
        <button  type="button" class="btn btn-primary col-5 offset-1 mb-3" data-toggle="modal" data-target="#exampleModal">
            Envoyer
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modification de produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="alert alert-success text-center col-12">ID nº <?php echo $row->pro_id; ?></p><br>
                        <p class="alert alert-success h6 col-12">Confirmez-vous les modifications pour le produit <?php echo $row->pro_libelle; ?> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                        <br><input class="btn btn-primary" type="submit" name="Envoyer" value="Envoyer">
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-outline-primary col-5 mb-3" href="Produits.php">Annuler</a><br>
    </section>
</form>

<!-- *** Ajout de produit *** -->
<a class="btn btn-info col-8 offset-2 col-lg-2 offset-lg-1 mb-2" href="AjoutProduit.php">Ajouter un Produit</a>

<!-- Suppresion de produits -->
<!-- ********** Modal de Suppréssion ********** -->
<form action="../Models/Delete.php" method="post"> <!-- Recupération de l'id -->
    <!-- Button modal Supprimer -->
    <button  type="button" class="btn btn-outline-danger col-8 offset-2 col-lg-2 offset-lg-1 mb-4" data-toggle="modal" data-target="#exampleModal2">
        Supprimer le produit
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel2">Suppression de produit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="alert alert-primary text-center col-12 mb-3">ID nº <?php echo $row->pro_id; ?></p>
                    <p class="alert alert-danger text-center col-12 mb-3">Confirmez-vous la suppression pour le produit <?php echo $row->pro_libelle; ?> ?</p>
                    <p class="alert alert-danger text-center col-12 h6"><img src="../assets/images/attention.png" alt="Attention" width="2vw">Cette Action est irréversible</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="DeleteButton" value="<?php echo $row->pro_id; ?>"> <!-- Bouton caché avec la valeur de pro_id -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <input type="submit" class="btn btn-danger" value="Supprimer">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Footer -->
<?php include 'footer.php' ?>
