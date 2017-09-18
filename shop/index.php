<?php
    //front controller

    // 1. obshie nastroyki
    //ini_set('display errors!', 1);
    //error_reporting(E_All);

    //2. podklyuchenia filov
    define('ROOT', dirname(__FILE__));
    require_once(ROOT. '\components\Router.php');

    //3. soedinienie s BD

    //4.vizov Router
    $router = new Router();
    $router->run();
?>