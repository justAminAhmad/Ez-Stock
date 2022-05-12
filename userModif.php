<?php include_once('./composant/head.php'); 
$user = new User();

if (isset($_POST['token-user'])) {
    $user->updateUser($_POST['pseudo'], $_POST['email'], $_POST['id']);
    echo '<script>window.location.href = "user.php"</script>';
}
?>
<?php
if (isset($_GET['edit'])) {
    $user_info = $user->getUserByID($_POST['id']);
}
?>

<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <div class="text-center mb-4">
          <img src="./img/Logo.png" alt="Logo" style="width : 100px; height : auto;">
        </div>
          
          <div class="card-body">
          
            <h2 class="card-title text-center mb-4">Modification utilisateur</h2>
            
              <form method="post" class="user">
                
                <div class="form-group">
                  <input hidden type="text" value="<? $_SESSION['token'] ?>" class="form-control" id="token-user" name="token-user" placeholder="token-client">
                </div>
                <div class="form-group mb-3">
                    <input hidden type="text"  class="form-control"
                    id="id" name="id" 
                    value=<?= $user_info['id'] ?> placeholder="token-user">
                </div>
                <div class="mb-3">
                  <label class="form-label">Pseudo</label>
                  <input type="text" value=<?= $user_info['pseudo'] ?> class="form-control" id="userPseudo" placeholder="Modifier Pseudo" name='pseudo' required>
                </div>
                
                <div class="mb-3">
                  <label class="form-label">Adresse email</label>
                  <input type="email" value=<?= $user_info['email'] ?> class="form-control" id="userMail" placeholder="Modifier Email" name='email' required>
                </div>

                <div class="form-footer">
                  <button type="submit" class="btn btn-primary w-100"  value='Modifier utilisateur'>Modifier utilisateur</button>
                </div>
              </form>
          </div>
      </div>
    </div>
    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
</body>