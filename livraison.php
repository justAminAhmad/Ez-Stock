<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col offset-sm-5">
                    <h2 class="page-title">
                        Gestion de Livraison
                    </h2>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>N° Commande</th>
                                            <th>Date</th>
                                            <th>Code Client</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Date Livraison</th>
                                            <th>Montant</th>
                                            <th>Statut Livraison</th>
                                            <th class="w-6"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>N° 15</td>
                                            <td>05/08/16</td>
                                            <td>6</td>
                                            <td>KEITA</td>
                                            <td>Fall</td>
                                            <td>08/08/17</td>
                                            <td>14000</td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" checked disabled>
                                                    <label class="form-check-label" for="flexRadioCheckedDisabled">
                                                        Livré
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="row-6 justify-content-center">
                                                <a href="./facturation.php" class="col-sm-4 btn btn-primary">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                    <p class="text-primary">.</p>Facture
                                                </a>
                                                <a href="#" class="col-sm-2 offset-1">Modifier</a>
                                                <a href="#" class="col-sm-2 text-danger offset-1">Supprimer</a>
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
    <?php include_once('./composant/end.php'); ?>