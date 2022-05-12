<?php 
include_once('./composant/head.php');
include_once('./composant/header.php');
include_once('./composant/nav.php'); 
$fournisseur = new Fournisseur();
$frn = null;
?>

<?php
if (isset($_POST['token-fournisseur'])) {
    $fournisseur->updateFournisseur($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['adresse'], $_POST['telephone'], $_POST['id']);
    echo '<script>window.location.href = "fournisseur.php"</script>';
}
?>
<?php
if (isset($_GET['edit'])) {
    $frn = $fournisseur->getFournisseurByID($_POST['id']);
    var_dump($frn);
}
?>

<div class="page-wrapper">
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Modifier un fournisseur
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./fournisseur.php" class="btn btn-primary">
                        Voir la liste des fournisseurs
                    </a>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Veuillez remplir le formulaire</h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" class="fournisseur">
                                    <div class="form-group mb-3">
                                        <input hidden type="text" class="form-control" 
                                        id="token-client" name="token-client" placeholder="token-client">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input hidden type="text"  class="form-control"
                                        id="id" name="id" 
                                        value=<?= $frn['id_fnr'] ?> placeholder="token-client">
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Nom</label>
                                        <div>
                                            <input type="text" class="form-control" 
                                            id="nom_fournisseur" name="nom" required
                                            value=<?= $frn['nom'] ?> placeholder="Nom du fournisseur">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Prenom</label>
                                        <div>
                                            <input type="text" class="form-control" 
                                            id="prenom_fournisseur" name="prenom" required
                                            value=<?= $frn['prenom'] ?> placeholder="Prenom du fournisseur">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Email</label>
                                        <div>
                                            <input type="email" class="form-control" 
                                            id="email_fournisseur" name="email" required
                                            value=<?= $frn['email'] ?> placeholder="email_fournisseur@exemple.com">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Adresse</label>
                                        <div>
                                            <input type="text" class="form-control" 
                                            id="adresse_fournisseur" name="adresse" required
                                            value=<?= $frn['adresse'] ?> placeholder="Adresse du fournisseur">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Telephone</label>
                                        <div>
                                            <input type="tel" class="form-control" 
                                            id="telephone_fournisseur" name="telephone" required
                                            value=<?= $frn['telephone'] ?> placeholder="xx xxx xx xx">
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('./composant/footer.php'); ?>
    </div>
    <?php include_once('./composant/end.php'); ?>