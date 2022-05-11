<?php include_once('./composant/head.php'); ?>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <img src="./img/Logo.png" alt="Logo" style="width : 100px; height : auto;">
            </div>
            <form class="card card-md" action="client" method="get" autocomplete="off">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Pseudo</label>
                        <input type="text" class="form-control" placeholder="Saisir votre pseudo">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Mot de passe
                            <span class="form-label-description">
                                <a href="./vide.php">Mot de passe oublié ?</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="********" autocomplete="off">
                            <span class="input-group-text">
                                <i class="fa fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Nouveau utilisateur ? <a href="./inscription.php" tabindex="-1">S'inscrire</a>
            </div>
        </div>
    </div>
    <?php include_once('./composant/end.php'); ?>