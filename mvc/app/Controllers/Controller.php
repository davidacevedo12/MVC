<?php

namespace App\Controllers;

class Controller{
    
public function view($route, $data = []){

extract($data);


    $route = str_replace('.', '/', $route);
        
        if (file_exists("../resoures/views/{$route}.php")) {

            ob_start();
            include "../resoures/views/{$route}.php";
            $content = ob_get_clean();

            return $content;

        } else {
            return "El archivo no existe";
        }

    }
}