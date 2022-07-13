<?php
$time = time();
setlocale(LC_TIME, 'tr_TR');

define('URL', 'https://ferienwohnungheringsdorf.de/');

if ((isset($_GET['route'])) && (!empty($_GET['route']))) {
    $route = $_GET['route'];
}
if ($route != 'index.php') {
    if (strstr($route, '/')) {
        echo "var";s
    }
} else {
    include '_modules/_homepage/_list.php';
}
echo $route;
