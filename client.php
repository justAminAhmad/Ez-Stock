<?php 
include_once('./composant/head.php');
include_once('./composant/header.php');
include_once('./composant/nav.php');

$clients = new Client();

if (isset($_POST['action'])) {
    if (isset($_POST['action']) == 'delete') {
        $clients->delClient($_POST['id']);
        $_POST = array();
        echo '<script>window.location.href = "client.php"</script>';;
    }
}

?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Gestion de clients
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./clientNew.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        <p class="text-primary">.</p> Ajouter un client
                    </a>
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
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Telephone</th>
                                            <th>Email</th>
                                            <th colspan=2 >Adresse</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($clients->getClients("client")) 
                                            {
                                                foreach ($clients->getClients("client") as $client) {
                                            // var_dump($client);
                                        ?>
                                        <tr>
                                            <td><?= $client['nom'] ?></td>
                                            <td><?= $client['prenom'] ?></td>
                                            <td><?= $client['telephone'] ?></td>
                                            <td><?= $client['email'] ?></td>
                                            <td><?= $client['adresse'] ?></td>

                                            <td>
                                                <a href="./clientModif.php">Modifier</a>
                                            </td>

                                            <td>
                                                <form method="post">
                                                    <input hidden type="text" value=<?= $client['id_client'] ?> name="id" id="id" />
                                                    <button type="submit" name="action" value="delete" class="btn btn-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        } 
                                        else 
                                        {
                                            echo "<p class='mt-5 mx-auto'>Il n'ya pas de client</p>";
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
    <?php include_once('./composant/end.php'); ?>