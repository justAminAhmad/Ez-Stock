<?php include_once('./composant/head.php'); 
$user = new User();

if (isset($_POST['token-user'])) {
    if ($_POST['token-user'] == "") {
            echo '<script>window.location.href = "connexion.php"</script>';

    }
    $user->addUser($_POST['pseudo'], $_POST['email'], $_POST['password']);
    echo '<script>window.location.href = "user.php"</script>';
    exit();
}
?>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <img src="./img/Logo.png" alt="Logo" style="width : 100px; height : auto;">
        </div>
          
          <div class="card-body">
          
            <h2 class="card-title text-center mb-4">Création nouvau utilisateur</h2>
            
              <form method="post" class="user">
                
                <div class="form-group">
                  <input hidden type="text" value="<? $_SESSION['token'] ?>" class="form-control" id="token-user" name="token-user" placeholder="token-user">
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Pseudo</label>
                  <input type="text" class="form-control" id="userPseudo" placeholder="Saisir Pseudo" name='pseudo' required>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Adresse email</label>
                  <input type="email" class="form-control" id="userMail" placeholder="Saisir Email" name='email' required>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Mot de passe</label>
                  <div class="input-group input-group-flat">
                    <input type="password" class="form-control" id="userPwd" placeholder="********"  autocomplete="off" name='password' required>
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
                  <button type="submit" class="btn btn-primary w-100"  value='Creer un nouveau utilisateur'>Créer nouveau utilisateur</button>
                </div>
              </form>
          </div>
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