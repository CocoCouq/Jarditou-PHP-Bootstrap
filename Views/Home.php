<!-- Hearder -->
<?php
    $Home = 'Home';
    $Produits = 'Produits';
    $Contact = 'Formulaires';
    include 'header.php';
    // Requete
    $requete = "SELECT pro_id, pro_photo, pro_prix FROM produits WHERE pro_stock > 50 ORDER BY pro_prix DESC";
    $result = $db->query($requete);
    verifObj($result);
?>
<!-- ******************************Accueil********************************** -->
<h1 id="ttlpage" class="col-4 offset-4 mb-5">Accueil</h1>
<!-- ***** Corps-Accueil ***** -->
<div class="row mb-4">
    <section class="col-sm-7 col-lg-8">
        <article><h3 class="ml-1">L'entreprise</h3></article>
        <p class="parag ml-2">
            Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.
        </p>
        <p class="parag ml-2">
            Créée il y a 70 ans, notre entreprise vend fleurs, arbustes, matériel à main et motorisés.
        </p>
        <p class="parag ml-2 mb-4">
            Implantés à Amiens, nous intervenons dans tout le département de la Somme : Albert, Doullens, Péronne, Abbeville, Corbie.
        </p>
        <article><h3 class="ml-1">Qualité</h3></article>
        <p class="parag ml-2">
            Notre entreprise familiale met tout son savoir-faire à votre disposition dans le domaine du jardin et du paysagisme.
        </p>
        <p class="parag ml-2 mb-4">
            Vous serez séduit par notre expertise, nos compétences et notre sérieux.
        </p>
        <article><h3 class="ml-1">Devis gratuit</h3></article>
        <p class="parag ml-2 mb-4">
            Vous pouvez bien sûr contacter pour de plus amples informations ou pour une demande d’intervention. Vous souhaitez un devis ? Nous vous le réalisons gratuitement.
        </p>
    </section>
<!-- ***** Col-Rgt ***** -->
    <section id="ColRg" class="col-11 col-sm-4 col-lg-3">
        <div id="CDC" class="row justify-content-center">
            <img id="cdcPht" class="img-fluid" src="../assets/images/cdc.png" alt="coup de coeur">
        </div>
        <?php
            $i = -1;
            while (++$i != 2 && $produit = $result->fetch()) { ?><!-- 2 conditions de sortie. fetch() jsuqu'a 2 -->
        <div id="artCDC" class="col">
            <img class="imgcdc col-12" src="../assets/images/<?php echo $produit->pro_id; ?>.<?php echo $produit->pro_photo; ?>" alt="cdc1">
            <p class="prix col-8 mx-auto"><?php echo $produit->pro_prix; ?> <img class="euro" src="../assets/images/euro.png" width="22px" height="22px"></p>
        </div>
        <?php } ?> <!--fin while -->
    </section>
</div>

<!-- Footer -->
<?php include 'footer.php' ?>
