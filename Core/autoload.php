<?php

require "Config/config.php";

// foreach ($autoload as $value) {

//     include ("Core/${value}".".php");
//     // $$value = new $value;
//     //  var_dump($value->view("admin.test.index"));
//     //  die();
// }

foreach ($autoloadModel as $model) 
{
    include ("Models/"."$model"."Model.php");
}
?>