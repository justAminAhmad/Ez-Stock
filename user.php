<?php 
include_once('./composant/head.php');
include_once('./composant/header.php');
include_once('./composant/nav.php');

$users = new User();

if (isset($_POST['action'])) {
    if (isset($_POST['action']) == 'delete') {
        $users->delUser($_POST['id']);
        $_POST = array();
        echo '<script>window.location.href = "user.php"</script>';
    }
}

?>

<div class="page-wrapper">
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Gestion d'utilisateurs
                    </h2>
                </div>
                <div class="col-auto">
                    <a href="./inscription.php" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        <p class="text-primary">.</p> Ajouter un utilisateur
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
                                            <th>pseudo</th>
                                            <th>email</th>
                                            <th>actions</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if ($users->getUsers("user")) 
                                            {
                                                foreach ($users->getUsers("client") as $user) {
                                        ?>
                                        <tr>
                                            <td><?= $user['pseudo'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td>
                                                <form method="post" action="./userModif.php?edit">
                                                    <input hidden type="text" value=<?= $user['id'] ?> name="id" id="id" />
                                                    <button type="submit" name="action" value="edit" class="btn btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </form>
                                            </td>

                                            <td>
                                                <form method="post">
                                                    <input hidden type="text" value=<?= $user['id'] ?> name="id" id="id" />
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
                                            echo "<p class='mt-5 mx-auto text-center'>Il n'ya pas de user</p>";
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