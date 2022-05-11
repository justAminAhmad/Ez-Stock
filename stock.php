<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>

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
                    <a href="./ajouter_stock.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        <p class="text-primary">.</p> Ajouter Produit
                    </a>
                </div>
            </div>
        </div>
        <div class="page-body">

            <div class="container-xl">
                <div class="row mb-5">
                    <div class="card col-3 offset-5">
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
                                            <th>Code</th>
                                            <th>Désignation</th>
                                            <th>Quantité</th>
                                            <th>Prix Unitaire</th>
                                            <th>Type</th>
                                            <th>Catégorie</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Pressea</td>
                                            <td>149</td>
                                            <td>600</td>
                                            <td>Jus de fruit</td>
                                            <td>Boisson</td>
                                            <td>
                                                <a href="#">Modifier</a>
                                            </td>
                                        </tr>
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