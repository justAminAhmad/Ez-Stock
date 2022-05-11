<?php include_once('./composant/head.php'); ?>
<?php include_once('./composant/header.php'); ?>
<?php include_once('./composant/nav.php'); ?>
<?php
$client = new Client();

if (isset($_POST['token-client'])) {
    $client->addClient($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['adresse'], $_POST['telephone']);

    echo '<script>window.location.href = "client.php"</script>';
    exit();
}
?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Creer un nouveau client
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./client.php" class="btn btn-primary">
                        Voir la liste des clients
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
                                <form method="POST" class="client">
                                    <div class="form-group mb-3 ">
                                        <input hidden type="text" class="form-control" id="token-client" name="token-client"
                                            placeholder="token-client">
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Nom</label>
                                        <div>
                                            <input type="text" class="form-control" id="nom_client" 
                                            name="nom" placeholder="Nom du client" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Prenom</label>
                                        <div>
                                            <input type="text" class="form-control" id="prenom_client" 
                                            name="prenom" placeholder="Prenom du client" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Email</label>
                                        <div>
                                            <input type="email" class="form-control" id="email_client" 
                                            name="email" placeholder="email_client@exemple.com" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Adresse</label>
                                        <div>
                                            <input type="text" class="form-control" id="adresse_client" 
                                            name="adresse" placeholder="Adresse du client" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Telephone</label>
                                        <div>
                                            <input type="tel" class="form-control" id="telephone_client" 
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