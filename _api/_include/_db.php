<?php
error_reporting(E_ALL);
$time = time();
setlocale(LC_TIME, 'tr_TR');
define('URL', 'https://ferienwohnungheringsdorf.de/');
define('API_URL', 'https://ferienwohnungheringsdorf.de/_api/index.php');
$con = mysqli_connect('213.238.179.147', 'admin_res', 'fu0!P2o1', 'admin_res');
mysqli_set_charset($con, "utf8");
