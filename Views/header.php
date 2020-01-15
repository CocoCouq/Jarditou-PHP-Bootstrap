<!-- Control Form  + Connexion DataBase -->
<?php
    include '../Controllers/lib.php';
    require '../Models/Connexion.php';  //  Contenant la fonction de connexion à la database + verif des objets
    $db = connexionBase();
?>
<!-- *** HEADER *** -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/CSS/style.css">
    <link rel="stylesheet" href="../assets/CSS/media.css">
    <title>Contact</title>
    <body class="container-fluid">
    <!------------LOGO-SLOGAN------------>
    <header class="row">
        <section class="col-8">
            <img id="logo" src="../assets/images/jarditou_logo2.png" width="35%" height="auto" alt="Logo Jarditou">
        </section>
        <aside id="slogan" class="col" title="Notre devise">
            TOUT LE JARDIN
        </aside>
    </header>
    <!---------------Menu--------------->
    <section id="hena">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo $Home; ?>.php">Accueil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Produits; ?>.php">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $Contact ?>.php">Contact</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    LA QUALITÉ DEPUIS 70 ANS
                </span>
            </div>
        </nav>
        <img id="promo"  class="col-12" src="../assets/images/promotion.jpg" alt="promotion" title="A ne pas manquer !!">
    </section>
