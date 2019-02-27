<?php 
    require('model/Database.php');
    require('controller/controller.php');
    spl_autoload_register(function($class){
        require("model/$name.php");
    });
?>