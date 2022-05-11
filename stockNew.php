<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>
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
                    <a href="./nouveau_client.php" class="btn btn-primary">
                        Liste Produits
                    </a>
                </div>
            </div>
        </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form class="card card-md" action="." method="get">
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Désignation</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control" placeholder="Désignation">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Quantité</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control" placeholder="Quantité">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Prix Unitaire</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control" placeholder="Prix Unitaire">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Catégorie</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control" placeholder="(facultatif)">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label">Type</label>
                                <div class="col-sm-8 offset-sm-1">
                                    <input type="text" class="form-control" placeholder="(facultatif)">
                                </div>
                            </div>
                            <div class="row offset-md-4">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-info w-50">Ajouter</button>
                                    <button type="submit" class="btn btn-danger w-50">Effacer</button>
                                </div>
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