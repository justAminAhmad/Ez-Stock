<?php 
    //Autoloader function
    function autoloader($class) {
        include_once("./classes/" . strtolower($class) . "_class.php");
    }

    //Register the autoloader
    spl_autoload_register("autoloader");
?>

