<?php 
include_once('./composant/head.php');
include_once('./composant/header.php');
include_once('./composant/nav.php');

$fournisseurs = new Fournisseur();

if (isset($_POST['action'])) {
    if (isset($_POST['action']) == 'delete') {
        $fournisseurs->delFournisseur($_POST['id']);
        $_POST = array();
        echo '<script>window.location.href = "fournisseur.php"</script>';;
    }
}

?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Gestion de Fournisseurs
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./fournisseurNew.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        <p class="text-primary">.</p> Ajouter un Fournisseur
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
                                            if ($fournisseurs->getFournisseurs("fournisseur")) 
                                            {
                                                foreach ($fournisseurs->getFournisseurs("fournisseur") as $fournisseur) {
                                            // var_dump($fournisseur);
                                        ?>
                                        <tr>
                                            <td><?= $fournisseur['nom'] ?></td>
                                            <td><?= $fournisseur['prenom'] ?></td>
                                            <td><?= $fournisseur['telephone'] ?></td>
                                            <td><?= $fournisseur['email'] ?></td>
                                            <td><?= $fournisseur['adresse'] ?></td>

                                            <td>
                                                <form method="post" action="./fournisseurModif.php?edit">
                                                    <input hidden type="text" value=<?= $fournisseur['id_fnr'] ?> name="id" id="id" />
                                                    <button type="submit" name="action" value="edit" class="btn btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </form>
                                            </td>

                                            <td>
                                                <form method="post">
                                                    <input hidden type="text" value=<?= $fournisseur['id_fnr'] ?> name="id" id="id" />
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
                                            echo "<p class='mt-5 mx-auto text-center'>Il n'ya pas de fournisseur</p>";
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