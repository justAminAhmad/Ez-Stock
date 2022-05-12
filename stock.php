<?php include_once('./composant/head.php'); 
include_once('./composant/header.php');
include_once('./composant/nav.php'); 

$stocks = new Stock();
$categories = new Categorie();
?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Liste Produits
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./stockNew.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        <p class="text-primary">.</p> Ajouter Produit
                    </a>
                </div>
            </div>
        </div>
        <div class="page-body">

            <div class="container-xl">
                <div class="row mb-5">
                    <div class="card col-4 offset-4">
                        <div class="card-body">
                            <form>
                                <div class="row align-items-center">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Designation">
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Désignation</th>
                                            <th>Quantité</th>
                                            <th>Prix Unitaire</th>
                                            <th>Type</th>
                                            <th>Catégorie</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($stocks->getStocks()) {
                                                foreach ($stocks->getStocks() as $stock) {
                                                    // var_dump($client);
                                        ?>
                                        <tr>
                                            <td><?= $stock['designation'] ?></td>
                                            <td><?= $stock['quantite'] ?></td>
                                            <td><?= $stock['prix'] ?></td>
                                            <td><?= $stock['type'] ?></td>
                                            <td><?= $stock['id_categ'] ?></td>
                                            <td>
                                                <form method="post" action="./stockModif.php?edit"
                                                    class='btn btn-warning p-0'>
                                                    <input hidden type="text" value=<?= $stock['id_stock'] ?> name="id" id="id" />
                                                    <button type="submit" name="action" value="edit" class="btn btn-warning">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </form>
                                                <form method="post" class='btn btn-danger p-0'>
                                                    <input hidden type="text" value=<?= $stock['id_stock'] ?> name="id" id="id" />
                                                    <button type="submit" name="action" value="delete" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<p class='mt-5 mx-auto'>Il n'ya pas de Stock</p>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./composant/footer.php'); ?>
    </div>
</div>
<?php include_once('./composant/end.php'); ?>