<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include '_include/_db.php';
require_once('_include/_function.php');

if ((isset($_GET['mainroute'])) && (!empty($_GET['mainroute']))) {
    $route = $_GET['mainroute'];
}

if (isset($route) && $route != 'index.php') {
    if (strstr($route, '/')) {
        
        $route = explode("/", $route);
        include '_modules/_' . $route[0] . '/_' . $route[1] . '.php';
    } else {
        include '_modules/_' . $route . '/_list.php';
    }
} else if (!isset($route)) {
    include '_modules/_homepage/_list.php';
} else {
    
    include '_modules/_homepage/_list.php';
}