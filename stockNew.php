<?php include_once('./composant/head.php'); 
include_once('./composant/header.php');
include_once('./composant/nav.php'); 

$frn = new User();
$stock = new Stock();
$categories = new Categorie();

if (isset($_POST['token-stock'])) {
    $stock->addStock($_POST['designation'], $_POST['quantite'], $_POST['prix'], $_POST['categorie'], $_POST['type']);
    echo '<script>window.location.href = "stock.php"</script>';
    exit();
}

?>
<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Ajouter un Produit
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./stock.php" class="btn btn-primary">
                        Liste Produits
                    </a>
                </div>
            </div>
        </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form class="card card-md" method="post" class="stock">
                        <div class="card-body">
                            <div class="form-group">
                                <input hidden type="text" class="form-control" id="token-stock" name="token-stock"
                                    placeholder="token-stock">
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Désignation</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control " placeholder="Le nom du produit"
                                            name='designation' required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Quantité</label>
                                <div class="col-sm-8 offset-sm-1">
                                   <input type="number" placeholder='Quantite  du produit' min=1 class="form-control"
                                        name='quantite' required />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Prix Unitaire</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="number" class="form-control" placeholder="Prix Unitaire du produit"
                                        name='prix' />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Catégorie</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <select name='categorie' class='form-control'>
                                            <option default value=''>
                                                (facultatif)
                                            </option>
                                            <?php
                                            $categories = $categories->getCategories();
                                            foreach ($categories as $categorie) {
                                                echo "<option value='" . $categorie['id_categ'] . "'>" . $categorie['designation'] . "</option>";
                                            }
                                            ?>
                                        </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control" name="type" placeholder="(facultatif)">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-info w-50 offset-4" value="Creer un nouveau produit">Ajouter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('./composant/footer.php'); ?>
</div>
<?php include_once('./composant/end.php'); ?>