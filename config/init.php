<?php 
    //Config File -> database credentials
    require_once 'config.php';

    //Autoload Classes
    function autoload_class($classname) {
        require_once 'library/'.$classname.'.php';
    }

    //Autoload all classes
    spl_autoload_register('autoload_class');

?>

