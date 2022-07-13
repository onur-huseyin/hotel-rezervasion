<?php
if (auth()) {
    if ((isset($_POST['startDate'])) && (!empty($_POST['startDate']))) {
        $startDate = mysqli_real_escape_string($con, $_POST['startDate']);
    } else {
        $error = $lang['missinData'] . 'startDate';
    }
    if ((isset($_POST['endDate'])) && (!empty($_POST['endDate']))) {
        $endDate = mysqli_real_escape_string($con, $_POST['endDate']);
    } else {
        $error = $lang['missinData'] . 'endDate';
    }
    if ((isset($_POST['room'])) && (!empty($_POST['room']))) {
        $room = mysqli_real_escape_string($con, $_POST['room']);
    } else {
        $error = $lang['missinData'] . 'room';
    }
    if (!$error) {
        $checkTotal = mysqli_query($con, "SELECT COUNT(id) as `total` FROM `reservations` WHERE ((`start_date` <= '$startDate' AND `end_date` >= '$endDate') OR (`start_date` <= '$endDate' AND `end_date` >= '$startDate')) AND  `room_id` = '$room'") or $result['log3'] = mysqli_error($con);
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
