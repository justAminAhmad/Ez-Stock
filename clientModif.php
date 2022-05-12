<?php 
include_once('./composant/head.php');
include_once('./composant/header.php');
include_once('./composant/nav.php'); 
$client = new Client();
$cliant = null;
?>

<?php
if (isset($_POST['token-client'])) {
    $client->updateClient($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['adresse'], $_POST['telephone'], $_POST['id']);
    echo '<script>window.location.href = "client.php"</script>';
}
?>
<?php
if (isset($_GET['edit'])) {
    $cliant = $client->getClientByID($_POST['id']);
}
?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Modifier un client
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
                                    <div class="form-group mb-3">
                                        <input hidden type="text" class="form-control" 
                                        id="token-client" name="token-client" placeholder="token-client">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input hidden type="text"  class="form-control"
                                        id="id" name="id" 
                                        value=<?= $cliant['id_client'] ?> placeholder="token-client">
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Nom</label>
                                        <div>
                                            <input type="text" class="form-control" 
                                            id="nom_client" name="nom" required
                                            value=<?= $cliant['nom'] ?> placeholder="Nom du client">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Prenom</label>
                                        <div>
                                            <input type="text" class="form-control" 
                                            id="prenom_client" name="prenom" required
                                            value=<?= $cliant['prenom'] ?> placeholder="Prenom du client">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Email</label>
                                        <div>
                                            <input type="email" class="form-control" 
                                            id="email_client" name="email" required
                                            value=<?= $cliant['email'] ?> placeholder="email_client@exemple.com">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Adresse</label>
                                        <div>
                                            <input type="text" class="form-control" 
                                            id="adresse_client" name="adresse" required
                                            value=<?= $cliant['adresse'] ?> placeholder="Adresse du client">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 ">
                                        <label class="form-label">Telephone</label>
                                        <div>
                                            <input type="tel" class="form-control" 
                                            id="telephone_client" name="telephone" required
                                            value=<?= $cliant['telephone'] ?> placeholder="xx xxx xx xx">
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