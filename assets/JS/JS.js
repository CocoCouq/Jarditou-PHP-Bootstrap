/*************** Vérification du formulaire ***************/

//  Déclarartion des regex
var filtreNom = /(^[A-Z]+[a-zA-Z-]+$)/;
var filtrePrenom = /(^[A-Z]+[a-zA-Zéèêëôœîïûüàáâæç-]+$)/;
var filtreMail = /(^[\w\.-]+@[\w-]+\.[\w]{2,3})/;
var filtreCdPost = /(^[0-9]{2}\s[0-9]{3})|(^[0-9]{5}$)|(2A)|(2B)|(^$)/;

//              FONCTION VERIFICATION FORMULAIRE

//  Recupération du bouton Envoyer
var element = document.getElementById('buttonSend');
//  Ajout d'un événement au click sur element contenant 'Envoyer'
//  'event' sera rappelé avec 'event.preventDefault()'
element.addEventListener("click", function verif(event)
{
//  Nom
    var nom = document.getElementById("rep1").value;    // .value permet de récupérer la valeur du Inuput
    if(!filtreNom.test(nom))    // Si test du regex différent de 'true'
    {
        document.getElementById("errNom").textContent = "Entrez un nom valide";
        event.preventDefault();
    }
    else   // Si test regex égal 'true', j'efface le contenu
        document.getElementById("errNom").textContent= "";
//  Même opération pour les autres champs
//  Prénom
    var prenom = document.getElementById("rep2").value;
    if(!filtrePrenom.test(prenom))
    {
        document.getElementById("errPrenom").textContent = "Entrez un prénom valide.";
        event.preventDefault();
    }
    else
        document.getElementById("errPrenom").textContent = "";
//  Email
    var mail = document.getElementById("rep3").value;
    if (!filtreMail.test(mail))
    {
        document.getElementById("errMail").textContent = "Renseignez un email contenant au moins '@' et '.'";
        send = false;
    }
    else
        document.getElementById("errMail").textContent = "";
//  Sujet
//  'CHOIX' est la valeur de la première option du select
//  Je vérifie simplement que le champs n'est pas vide
    if (document.getElementById("rep4").value == "CHOIX")
    {
        document.getElementById("errSuj").textContent = "Choisissez le sujet de votre requête";
        event.preventDefault();
    }
    else
        document.getElementById("errSuj").textContent = "";
//  Question
    if (document.getElementById("rep5").value == "")
    {
        document.getElementById("errQuest").textContent = "Vous n'avez saisi aucune question";
        event.preventDefault();
    }
    else
        document.getElementById("errQuest").textContent = "";
//  Date de naissance
//  Le input de type date formate le retour
//  Je verifie donc simplement qu'il n'est pas vide
    if (document.getElementById("dates").value == "")
    {
        document.getElementById("errDate").textContent = "Renseignez une date de naissance";
        event.preventDefault();
    }
    else
    document.getElementById("errDate").textContent = "";
//  Acceptation formulaire
//  Grace à l'option '.checked' on sait si checkbox et radio sont cochés
    if (document.getElementById('ckbox').checked == false)
    {
        document.getElementById("errChckBox").textContent = "Veuillez accepter l'envoie du formulaire";
        event.preventDefault();
    }
    else
      document.getElementById("errChckBox").textContent = "";

  //  Sexe
      if ((document.getElementById('inlineRadio1').checked == false) && (document.getElementById('inlineRadio2').checked == false))
      {
          document.getElementById("errSexe").textContent = "Renseignez votre genre";
          event.preventDefault();
      }
      else
        document.getElementById("errSexe").textContent = "";
//  Code Postal
//  Le champs n'est pas obligatoire
//  J'autorise une réponse vide dans mon regex
    var cdPost = document.getElementById("code").value;
    if(!filtreCdPost.test(cdPost))
    {
        document.getElementById("errCode").textContent = "Code Postal invalide";
        event.preventDefault();
    }
    else
        document.getElementById("errCode").textContent= "";

});
