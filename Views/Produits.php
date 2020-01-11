<?php 
    include 'header.php';
    //  Select de la table produit
    $requete = "SELECT pro_prix, pro_libelle, pro_id, pro_photo, pro_ref, pro_description, pro_d_ajout, pro_d_modif, pro_bloque FROM produits ORDER BY pro_prix";
    $result = $db->query($requete);
    verifObj($result);
?>

<h1 id="ttlpage" class="col-4 offset-4">
    Produits
</h1><br>
<!--------------Tableau------------->
<?php
// fetch = Aller chercher
    while ($row = $result->fetch()){
// Boucle tant qu'il y a des valeurs à 'fetch'
// Les resultats sont passés dans l'objet $row
?>
<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="row card-header" id="headingOne">
            <h2 class="col-4 mb-0 text-center">
                <button class="txtDec btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <img class="imgTab" src="../assets/images/<?php echo $row->pro_id; ?>.<?php echo $row->pro_photo; ?>" alt="Aramis">
                    <img src="../assets/images/clique.png" width="10%" alt="Cliquez ici">
                </button>
            </h2>
            <p class="prixTab col-4 text-center">
                <?php echo $row->pro_prix."€"; ?>
            </p>
                <form class="marque col-4 text-center" action="Details.php" method="post">
                    <input class="btn btn-link" type="submit" name="Detail" value="<?php echo $row->pro_libelle; ?>">
                </form>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="row card-body">
                <ins class="ReducImg col-6"><img class="img-thumbnail" src="../assets/images/<?php echo $row->pro_id; ?>.<?php echo $row->pro_photo; ?>" alt="Grande Photo"></ins>
                <p class="col-5 offset-1">
                    <ins class="categTab row"><?php echo $row->pro_ref; ?></ins><br>
                    <ins class="prix2Tab row"><?php echo $row->pro_prix."€"; ?></ins><br>
                    <ins class="refTab row">ID : <?php echo $row->pro_id; ?></ins>
                    <ins class="refTab row">Libellé : <?php echo $row->pro_libelle; ?></ins><br>
                    <ins class="refTab row">Ajouté : <?php echo $row->pro_d_ajout; ?></ins>
                    <ins class="refTab row">Modifié : <?php echo $row->pro_d_modif; ?></ins>
                    <ins class="refTab row">Bloqué : <?php echo $row->pro_bloque; ?></ins>
                    <ins class="descTab row">Description</ins>
                    <ins class="desc2Tab row"><?php echo $row->pro_description; ?></ins>
                </p>
            </div>
        </div>
    </div>
</div><br>

<?php } ?> <!--fin while -->

<?php include 'footer.php' ?>
