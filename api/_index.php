<?php
echo "var";
/*
include '_include/_db.php';
include '_include/_function.php';
include '_language/_default.php';
$process = $_POST['process'];
if ($process != 'index.php') {
    if (strstr($process, '/')) {
        $route = explode("/", $process);
        include '_modules/_' . $route[0] . '/_' . $route[1] . '.php';
    }
}

print_r($result);
