<?php

class BaseController
{
    const VIEW_FOLDER_NAME = "Views";

    public function view($viewPath,  $datas=[])
    {
        foreach ($datas as $key => $value) {
           $$key = $value;
        }
        // echo "<pre>";
        // print_r($categories);
        // die();
        
        $viewPath = self::VIEW_FOLDER_NAME."/".str_replace('.','/',$viewPath).".php";
        // var_dump($viewPath);
        // die();
        return require $viewPath;
    }

}

?>