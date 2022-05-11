<?php include_once('./composant/head.php'); ?>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <img src="./img/Logo.png" alt="Logo" style="width : 100px; height : auto;">
        </div>  
        <form class="card card-md" action="client" method="get">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Création nouvau compte</h2>
            <div class="mb-3">
              <label class="form-label">Pseudo</label>
              <input type="text" class="form-control" placeholder="Saisir Pseudo">
            </div>
            <div class="mb-3">
              <label class="form-label">Adresse email</label>
              <input type="email" class="form-control" placeholder="Saisir Email">
            </div>
            <div class="mb-3">
              <label class="form-label">Mot de passe</label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control"  placeholder="********"  autocomplete="off">
                <span class="input-group-text">
                  <i class="fa fa-eye"></i>
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox" class="form-check-input"/>
                <span class="form-check-label">Accepter les <a href="./terms-of-service.html" tabindex="-1">termes et conditions d'utilisation</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Créer nouveau compte</button>
            </div>
          </div>
        </form>
        <div class="text-center text-muted mt-3">
          Vous avez déjà un compte? <a href="./connexion.php" tabindex="-1">connectez-vous</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
</body>