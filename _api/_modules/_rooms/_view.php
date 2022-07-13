<?php
if (auth()) {
    if ((isset($_POST['id'])) && (!empty($_POST['id']))) {
        $id = mysqli_real_escape_string($con, $_POST['id']);
    } else {
        $error = $lang['missinData'] . 'id';
    }
    if (!$error) {
        $checkTotal = mysqli_query($con, "SELECT * FROM `rooms` WHERE `id` = '$id' AND `status` = '1'") or $result['log3'] = mysqli_error($con);
        $fetchTotal = mysqli_fetch_assoc($checkTotal);
        if ($fetchTotal) {
            $result['status'] = true;
            $result['message'] = $lang['success'];
            $result['data'] = $fetchTotal;
        } else {
            $result['status'] = false;
            $result['message'] = $lang['error'];
        }
    } else {
        $result['status'] = false;
        $result['message'] = $error;
    }
} else {
    $result['status'] = false;
    $result['message'] = $lang['errorAuth'];
}
