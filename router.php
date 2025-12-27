<?php

$uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

switch($uri){
    case "/":
    case "/home":
        $page="home";
        break;
    case "/profil":
        $page="profil";
        break;
    case "/login":
        $page="login";
        break;
    default:
    $page="404";
}