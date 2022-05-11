<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Empty page - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css" rel="stylesheet" />
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="./dist/css/demo.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
        integrity="sha256-zmfNZmXoNWBMemUOo1XUGFfc0ihGGLYdgtJS3KCr/l0=" crossorigin="anonymous" />

    <?php
        include_once("./includes/functions.php");
        include_once("./includes/class-autoload.inc.php");
    ?>
    
    <!--
        // start a session
        session_start();
        $admin = null;
        // check if the user is logged in or not
        if (!isset($_SESSION['token'])) 
        {
            // if php self not on login page
            if (basename($_SERVER['PHP_SELF']) != 'login.php') 
            {
                // redirect to login page
                header('Location: login.php');
            }
        }
        else 
        {
            if (basename($_SERVER['PHP_SELF']) == 'login.php') 
            {
                // redirect to login page
                header('Location: clients.php');
                $admin = new Admin();
                $admin = $admin->getAdminByToken($_SESSION['token']);
                var_dump($admin);
                $nom = $admin['nom'];
                $prenom = $admin['prenom'];


                // set admin nom and prenom to  javascipt local storage
                echo "<script>
                localStorage.setItem('nom', '$nom');
                localStorage.setItem('prenom', '$prenom');
                </script>";
            }
        }
    -->

    <style>
    *,
    *::after,
    *::before {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    </style>
</head>

<body>
    <div class="wrapper">