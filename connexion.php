<?php include_once('./composant/head.php'); 

$user = new User();

include("securimage/securimage.php");

$securimage = new Securimage();

if (isset($_POST['submit'])) 
{
    if ($securimage->check($_POST['captcha']) == false) 
    {
        echo '<script>alert("Captcha Failed");</script>';
    }
    else 
    {
        $auth = $user->authenticateUser($_POST['pseudo'], $_POST['password']);
        if ($auth != false) 
        {
            $_SESSION['token'] = $auth;
            echo '<script>window.location.href = "client.php"</script>';
        } 
        else 
        {
            echo '<script>alert("Pseudo ou Mot de passe incorrecte.");</script>';
        }
    }
}

?>



<body class=" border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="text-center mb-4">
                <img src="./img/Logo.png" alt="Logo" style="width : 100px; height : auto;">
            </div>
            <form class="card card-md" method="post" class="user">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Pseudo</label>
                        <input type="text" class="form-control" id="conPseudo" 
                        placeholder="Saisir votre pseudo" name="pseudo" required>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Mot de passe
                            <span class="form-label-description">
                                <a href="./vide.php">Mot de passe oublié ?</a>
                            </span>
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control"  id="conPwd" 
                            placeholder="********" autocomplete="off" name="password" required>
                            <span class="input-group-text">
                                <a href="#" onclick="toggle()"><i class="fa fa-eye"></i></a>
                                <script>
                                    function toggle()
                                    {
                                        var pwd = document.getElementById("conPwd");
                                        if(pwd.type === "password")
                                        {
                                            pwd.type = "text";
                                        } else
                                        {
                                            pwd.type = "password";
                                        }
                                    }
                                </script>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <img src="securimage/securimage_show.php" alt="CAPTCHA Image"
                            class="img-fluid" />
                        <a href="<?= $_SERVER['PHP_SELF'] ?>" class="btn btn-link">
                            <img src="securimage/images/refresh.png" alt="Reload Image" /> </a>
                    </div>
                    <div class="form-group">
                        <input type="text" name="captcha" class="form-control"
                            placeholder="Entrez le code" required />
                    </div>

                    <div class="form-footer">
                        <button type="submit" name="submit" class="btn btn-primary w-100" value="connexion">Se connecter</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                <p>Nouveau utilisateur ?</p> Veuillez contacter un utilisateur existant pour vous enregistrer !
            </div>
        </div>
    </div>
    <?php include_once('./composant/end.php'); ?>