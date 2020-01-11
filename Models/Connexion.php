<!-- Fonction de connexion à la database -->
<?php
  function connexionBase()
  {
        // Déclaration de la connexion
        $host = 'localhost'; /************/
        $login = 'root';
        $password = 'root';
        $base = 'Jarditou';

        try
        {
            //connextion à la database
            $db = new PDO('mysql:host='.$host.';charset=utf8;dbname='.$base, $login, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Je défini que fetch me donnera des objets par default
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $db;
        }
        catch (Exception $e)
        {
            echo"Erreur : ".$e->getCode();
            die("Fin du script");
        }
  }
?>
<?php
//  Verification des objects apres une requete
function  verifObj($result)
{
    if (!$result)
    {
        $tableauErreurs = $db->errorInfo();
        echo $tableauErreur[2];
        die("Erreur dans la requête");
    }
    if ($result->rowCount() == 0)
       die("La table est vide");
}
?>
