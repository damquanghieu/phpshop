<?php

   
    
    function asset($path)
    {
        $VIEW = "Views";

        foreach ($datas as $key => $data) {
           $$key = $data;
        }
        $path = str_replace(".","/", $path);
        $viewPath = $VIEW."/".$path.".php";

        return require $viewPath;
    }

// $helper = new helper();
// $a =1;
// $helper->view("admin.layouts.index",['a' =>$a]);

?>  