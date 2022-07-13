<?php
if (auth()) {

    if ((isset($_POST['room'])) && (!empty($_POST['room']))) {
        $room = mysqli_real_escape_string($con, $_POST['room']);
    } else {
        $error = $lang['missinData'] . 'room';
    }
    if (!$error) {
        $data = array();
        $date = date('Y-m-d');
        $checkTotal = mysqli_query($con, "SELECT * FROM `reservations` WHERE `room_id` = '$room' AND `end_date` >= '$date' ") or $result['log1'] = mysqli_error($con);
        $fetchTotal = mysqli_fetch_assoc($checkTotal);
        while ($fetchTotal = mysqli_fetch_assoc($checkTotal)) {
            $data[] = $fetchTotal;
        }
        if ($checkTotal) {
            $result['data'] = $data;
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
