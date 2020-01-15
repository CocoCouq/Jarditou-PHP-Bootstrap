<!-- Hearder -->
<?php
    $Home = 'Home';
    $Produits = 'Produits';
    $Contact = 'Formulaires';
    include 'header.php';
?>

<!-- ******************************Formulaire de Contact*********************************** -->
<h1 id="ttlpage" class="col-4 offset-4 mb-4">Contact</h1>
<!---------------Form--------------->
<ins id="oblig" class="requi"> * Ces zones sont obligatoires </ins>
<form class="col" id="Formulaire" action="../Models/Script.php" method="post">
<!-----------Coordonnées------------>
    <fieldset class="mb-4" aria-colcount="50">
        <legend class="mb-5">
            Coordonnées
        </legend>
        <section class="row">
            <label class="col-2 offset-sm-1" id="nom" for="nom"><h4 class="largContact2">Nom<ins class="requi">*</ins></h4></label><input class="col-3 col-sm-2 form-control" id="rep1" type="text" name="nom" title="Renseigner votre nom">
            <label class="col-2 offset-1 offset-sm-2" id="prenom" for="prénom"><h4 class="largContact">Prénom<ins class="requi">*</ins></h4></label><input class="col-3 col-sm-2 form-control" id="rep2" type="text" name="prénom" title="Renseigner votre prénom">
        </section>
        <section class="row">
            <p class="erre col-5 offset-1" id="errNom"></p>
            <p class="erre col-5 offset-1" id="errPrenom"></p>
        </section>
        <section class="row">
            <label class="sexe col-2 offset-sm-1">
                <h4 class="largContact2">Sexe<ins class="requi">*</ins></h4>
            </label>
            <div class="form-check form-check-inline">
                <input class="radI col-1 offset-3 form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Femme">
                <label class="radI col-2 form-check-label" for="inlineRadio1"><h5 class="largContact2">Féminin</h5></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="radI col-1 form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Homme">
                <label class="radI col-2 form-check-label" for="inlineRadio2"><h5 class="largContact2">Homme</h5></label>
            </div>
        </section>
        <p class="erre col-5 offset-1" id="errSexe"></p>
        <section class="row mb-4">
            <label id="date" class="col-6 offset-sm-1" for="Date de naissance"><h4 class="largContact2">Date de naissance<ins class="requi">*</ins></h4></label><input id="dates" class="col-5 col-sm-4 form-control" type="date" name="Date" title="Renseigner votre Date de naissance"><br>
        </section>
        <p class="erre col-5 offset-7" id="errDate"></p>
        <section class="row">
            <label class="col-2 offset-sm-1 mb-4" for="Adresse"><h4 class="largContact">Adresse</h4></label><input class="col-9 col-sm-8 form-control" type="text" name="Adresse" title="Adresse">
        </section>
        <section class="row">
            <label class="col-2 offset-sm-1" for="Ville"><h4 class="largContact2">Ville</h4></label><input class="col-4 col-sm-3 form-control" type="text" name="Ville" title="Ville">
            <label class="col-2 offset-sm-1" for="Code postal"><h4 class="largContact2">C.P.</h4></label><input class="col-3 col-sm-2 form-control" id="code" type="text" name="CodePostal" title="Code postal (exemple: 75000)">
        </section>
        <p class="erre col-5 offset-7" id="errCode"></p>
        <section class="row">
            <label class="col-2 offset-sm-1" for="Email"><h4 class="largContact2">Email<ins class="requi">*</ins></h4></label><input class="col-4 col-sm-3 form-control" id="rep3" type="text" name="Email" title="Renseigner votre Email">
        </section>
        <p class="erre col-5 offset-1" id="errMail"></p>
    </fieldset>
    <fieldset>
<!--------------Demande------------->
        <legend class="mb-5">
            Votre demande
        </legend>
        <section class="row">
            <label class="col-2 offset-sm-1" for="Sujet"><h4 class="largContact2">Sujet<ins class="requi">*</ins></h4></label>
            <select class="selecteur col-5 col-xs-4 col-sm-3 form-control" id="rep4" name="Sujet" size="1" title="Selectionner un sujet">
                <option value="CHOIX">Choissisez</option>
                <option value="Mes commandes"> Mes commandes</option>
                <option value="Question">Question sur produit</option>
                <option value="Réclamation">Réclamation</option>
                <option value="Autres">Autres</option>
            </select>
        </section>
        <p class="erre col-5 offset-1" id="errSuj"></p>
        <section class="row">
            <label class="col-2 offset-sm-1 mb-3" for="Questions"><h5 id="quest">Questions<ins class="requi">*</ins></h5></label>
            <textarea class="col-9 col-sm-8 form-control" id="rep5" rows="8" name="Questions" title="Remplissez le champs des questions"></textarea>
        </section>
        <p class="erre col-5 offset-3" id="errQuest"></p>
    </fieldset>
    <input class="col-1 offset-1" id="ckbox" type="checkbox" name="Acceptation" title="Veuillez accepter le traitement du formulaire."><label class="col-9 pl-1" for="Accepte Form" id="Textaccept"><h6 id="accep">J'accepte le traitement informatique de ce formulaire.</h6></label>
    <p class="erre col-5 offset-1" id="errChckBox"></p>
    <section class="row">
        <input class="col-3 col-lg-1 col-xs-2 offset-sm-1 btn btn-primary" id="buttonSend" type="submit"  name="submit" value="Envoyer" title="Envoyer">
        <input class="col-3 col-lg-1 col-xs-2 ml-3 btn btn-outline-primary" type="reset" name= "reset" value="Annuler" title="Annuler">
    </section>
</form>
<br>

<!-- Footer -->
<?php include 'footer.php' ;?>
