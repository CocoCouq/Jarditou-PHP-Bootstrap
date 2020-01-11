  <!-- Vérification du formulaire côté serveur -->
  <!-- Si on veut désactiver le js :
      On utlisera la fonction header("location : Formulaires.php")
      header("location : Script.php") -->
  <?php
      $filtreNom = "/(^[A-Z]+[a-zA-Z-]+$)/";
      $filtrePrenom = "/(^[A-Z]+[a-zA-Zéèêëôœîïûüàáâæç-]+$)/";
      $filtreCP = "/(^[0-9]{2}\s[0-9]{3})|(^[0-9]{5}$)|(2A)|(2B)/";
      $filtreEmail = "/(^[\w\.-]+@[\w-]+\.[\w]{2,3})/";

      $Erreurs = [];

      if (isset($_POST['submit'])) // Si le form est envoyé
      {
/* NOM */
      if (!empty($_POST['nom']))  // Si le champs est différent de vide
      {
          if (preg_match($filtreNom, $_POST['nom'])) // Test le regex
            $Nom = $_POST['nom'];
          else // Si pas dans le regex
            $Erreurs['Nom'] = "Erreur de saisie";
      } // Si vide
      else
        $Erreurs['Nom'] = 'Vide';

/* PRENOM */
      if (!empty($_POST['prénom']))
      {
          if (preg_match($filtrePrenom, $_POST['prénom']))
            $Prenom = $_POST['prénom'];
          else
            $Erreurs['Prénom'] = "Erreur de saisie";
      }
      else
        $Erreurs['Prénom'] = 'Vide';

/* CODE POSTAL */
      if (!empty($_POST['CodePostal']))
      {
          if (preg_match($filtreCP, $_POST['CodePostal']))
            $CodeP = $_POST['CodePostal'];
          else
            $Erreurs['CodePostal'] = "Erreur de saisie";
      }
      else
        $Erreurs['CodePostal'] = 'Vide';

/* EMAIL */
      if (!empty($_POST['Email']))
      {
          if (preg_match($filtreEmail, $_POST['Email']))
            $Mail = $_POST['Email'];
          else
            $Erreurs['Mail'] = "Erreur de saisie";
      }
      else
        $Erreurs['Mail'] = 'Vide';
    }
  ?>
