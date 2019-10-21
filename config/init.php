<?php
    //Start Session
    session_start();
    //Config File -> database credentials
    require_once 'config.php';

    //Include helpers
    require_once "helpers/system_helper.php";

    //Autoload Classes
    function autoload_class($classname) {
        require_once 'library/'.$classname.'.php';
    }

    //Autoload all classes
    spl_autoload_register('autoload_class');

?>

