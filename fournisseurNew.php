<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>
<?php
$fournisseur = new Fournisseur();

if (isset($_POST['token-client'])) {
    $fournisseur->addFournisseur($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['adresse'], $_POST['telephone']);

    echo '<script>window.location.href = "fournisseur.php"</script>';
    exit();
}
?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Creer un nouveau fournisseur
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
                                    <div class="form-group mb-3 ">
                                        <input hidden type="text" class="form-control" id="token-client" name="token-client"
                                            placeholder="token-client">
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Nom</label>
                                        <div>
                                            <input type="text" class="form-control" id="nom_fournisseur" 
                                            name="nom" placeholder="Nom du fournisseur" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Prenom</label>
                                        <div>
                                            <input type="text" class="form-control" id="prenom_fournisseur" 
                                            name="prenom" placeholder="Prenom du fournisseur" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Email</label>
                                        <div>
                                            <input type="email" class="form-control" id="email_fournisseur" 
                                            name="email" placeholder="email_fournisseur@exemple.com" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Adresse</label>
                                        <div>
                                            <input type="text" class="form-control" id="adresse_fournisseur" 
                                            name="adresse" placeholder="Adresse du fournisseur" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Telephone</label>
                                        <div>
                                            <input type="tel" class="form-control" id="telephone_fournisseur" 
                                            name="telephone" placeholder="xx xxx xx xx" required>
                                        </div>
                                    </div>
                                    
                                    <hr>
                                        <input type="submit" class="btn btn-primary btn-user btn-block"
                                        value='Enregistrer' />
                                    </a>
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