<?php
if (auth()) {
    if ((isset($_POST['id'])) && (!empty($_POST['id']))) {
        $id = mysqli_real_escape_string($con, $_POST['id']);
    } else {
        $error = $lang['missinData'] . 'id';
    }
    if (!$error) {
        $checkTotal = mysqli_query($con, "SELECT * FROM `rooms` WHERE `room_id` = '$room' AND (`start_date` <= '$startDate' AND `end_date` >= '$endDate') OR (`start_date` <= '$endDate' AND `end_date` >= '$startDate')") or $result['log3'] = mysqli_error($con);
        $fetchTotal = mysqli_fetch_assoc($checkTotal);
        if ($fetchTotal['total'] == 0) {
            $result['status'] = true;
            $result['message'] = $lang['successQueryRoom'];
        } else {
            $result['status'] = false;
            $result['message'] = $lang['roomIsFull'];
        }
    } else {
        $result['status'] = false;
        $result['message'] = $error;
    }
} else {
    $result['status'] = false;
    $result['message'] = $lang['errorAuth'];
}
