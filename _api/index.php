<?php
error_reporting(0);
$error = '';
include '_include/_db.php';
include '_include/_function.php';
include '_language/_default.php';

if (isset($_POST['process'])) {
    $process = $_POST['process'];
    if ($process != 'index.php') {
        if (strstr($process, '/')) {
            $route = explode("/", $process);
            include '_modules/_' . $route[0] . '/_' . $route[1] . '.php';
        }
    }
} else {
    $result['status'] = false;
    $result['message'] = "Lütfen geçerli bir istek gönderiniz !";
}
if (is_array($result)) {
    echo json_encode($result, true);
}
