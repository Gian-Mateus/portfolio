<?php

namespace App\ControlRoutes;

class Routes{
    public static function render(){
        // Get current URL
        $url = $_SERVER['REQUEST_URI'];
        $params = array_filter(explode("/", $url));
        
        if($url == "/"){
            $view =  require_once __DIR__."/../public/views/home.php";
        } else if(end($params) == "index.php" || end($params) == "index"){
            $view = require_once __DIR__."/../public/views/home.php";
        } else {
            $view = require_once __DIR__."/../public/views/".end($params).".php";
        }
        return $view;
    }

    public static function getRoute(){
        $url = $_SERVER['REQUEST_URI'];
        $params = array_filter(explode("/", $url));
        $lastParam = end($params);
        return $lastParam;
    }
}

?>