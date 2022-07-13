<?php
if (auth()) {
    require 'class.iCalReader.php';
    if ((isset($_POST['id'])) && (!empty($_POST['id']))) {
        $id = mysqli_real_escape_string($con, $_POST['id']);
    } else {
        $error = $lang['missinData'] . 'id';
    }
    $checkTotal = mysqli_query($con, "SELECT * FROM `rooms` WHERE `id` = '$id' AND `status` = '1'") or $result['log1'] = mysqli_error($con);
    while ($fetchTotal = mysqli_fetch_assoc($checkTotal)) {
        $ical = new ICal($fetchTotal['ics_url']);
        $events = $ical->events();
        foreach ($events as $event) {
            $data['room'] = $fetchTotal['id'];
            $data['startDate'] = date('Y-m-d', strtotime($event['DTSTART']));
            $data['endDate'] = date('Y-m-d', strtotime($event['DTEND']));
            $data['name'] = $event['SUMMARY'];
            $data['email'] = 'no-replay@hamarat.tech';
            $data['phone'] = '11111111111';
            $return = request('reservation/add', 'POST', $data);
            $data = NULL;
        }
    }
    $result['status'] = true;
    $result['message'] = $lang['success'];
} else {
    $result['status'] = false;
    $result['message'] = $lang['errorAuth'];
}
