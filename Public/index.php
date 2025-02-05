<?php

include "./../App/Controllers/HomeController.php"

$path = $_SERVER['REQUEST_URI'];

switch($path){
    case "/":
        $homeController = new HomeController;
        $homeController->index();
}