<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>
<div class="page-wrapper">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Nouvelle Commande
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="commande.php" class="btn btn-primary">
                        Liste Commandes
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="card col-md-6">
                    <div class="card-header">
                        <h3 class="card-title">Choisir un produit</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Nom Produit</label>
                                <div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Selection</label>
                                <select class="form-select" aria-label="Disabled select example">
                                    <option selected>Produit</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Quantite</label>
                                <div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>    
                    </div>
                </div>
                <div class="card col-md-4 offset-1">
                    <div class="card-header">
                        <h3 class="card-title">Panier de la commande</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th>Ref Produit</th>
                                    <th>Prix Unitaire</th>
                                    <th>Quantite</th>
                                    <th>Montant Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Madar</td>
                                    <td>1500</td>
                                    <td>5</td>
                                    <td>7500</td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>One Note lap</td>
                                    <td>100</td>
                                    <td>30</td>
                                    <td>3000</td>
                                    <td>
                                        <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></span></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2 style="text-align: center; background-color:#f1f4f8;">Total Panier :</td>
                                    <td></td>
                                    <td>10500</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <form>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Code - Client</label>
                                <select class="form-select" aria-label="Disabled select example">
                                    <option selected>Produit</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group mb-3 ">
                                <label class="form-label">Date de Livraison</label>
                                <div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                <span class="form-label-description">
                                    <a href="./nouveau_client.php">Nouveau client ?</a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('./composant/footer.php'); ?>
</div>
<?php include_once('./composant/end.php'); ?>