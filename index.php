<?php

require "Core/autoload.php";
require "Core/view.php";

if (isset($_GET['controller'])) {
    $controllerName = ucfirst($_GET['controller']) . "Controller.php";
} else {
    $controllerName = "ProductController.php";
    # code...
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "index";
}


require "Controllers/${controllerName}";

$controllerName = chop($controllerName,".php");

$controller = new $controllerName();
$controller->$action();


?>