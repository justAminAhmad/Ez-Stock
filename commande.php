<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Commande en cours
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./nouvelle_commande.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        <p class="text-primary">.</p> Nouvelle Commande
                    </a>
                </div>
            </div>
        </div>
        <div class="page-body">

            <div class="container-xl">
                <div class="row mb-5">
                    <div class="card col-7 offset-3">
                        <div class="card-body">
                            <form>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Filtrer clients</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Code-Client</label>
                                    <div class="col-sm-10">  
                                        <select class="form-select" aria-label="Disabled select example">
                                            <option selected></option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
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
                                            <th>N° Commande</th>
                                            <th>Date</th>
                                            <th>Code Client</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Produit</th>
                                            <th>P.U.</th>
                                            <th>Qte</th>
                                            <th>Total</th>
                                            <th>Date livraison</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>N°35</td>
                                            <td>18/08/16</td>
                                            <td>2</td>
                                            <td>Sow</td>
                                            <td>Ibrahima</td>
                                            <td>Pressea</td>
                                            <td>1000</td>
                                            <td>30</td>
                                            <td>30000</td>
                                            <td>24/08/16</td>
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