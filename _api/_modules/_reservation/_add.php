<?php
if (auth()) {
    if ((isset($_POST['room'])) && (!empty($_POST['room']))) {
        $room = mysqli_real_escape_string($con, $_POST['room']);
    } else {
        $error = $lang['missinData'] . 'room';
    }
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
    if ((isset($_POST['name'])) && (!empty($_POST['name']))) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
    } else {
        $error = $lang['missinData'] . 'name';
    }
    if ((isset($_POST['email'])) && (!empty($_POST['email']))) {
        $email = mysqli_real_escape_string($con, $_POST['email']);
    } else {
        $error = $lang['missinData'] . 'email';
    }
    if ((isset($_POST['phone'])) && (!empty($_POST['phone']))) {
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
    } else {
        $error = $lang['missinData'] . 'phone';
    }
    if (!$error) {
        $add = mysqli_query($con, "INSERT INTO `reservations` (`room_id`,`start_date`,`end_date`,`name`,`email`,`phone`) VALUES('$room','$startDate','$endDate','$name','$email','$phone')") or $result['log1'] = mysqli_error($con);
        if ($add) {
            $content = "<b>Giriş Tarihi:</b>" . $startDate . "<br><b>Çıkış Tarihi:</b>" . $endDate . "<br><b>Ad Soyad:</b>" . $name . "<br><b>E-posta:</b>" . $email . "<br><b>Telefon:</b>" . $phone . "<br><b>Oda:</b>" . $room;
            if ($email != 'no-replay@hamarat.tech') {
                @mailSend($content, "Rezarvasyon Detayları", $email, $name);
            }
            $result['status'] = true;
            $result['message'] = $lang['success'];
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
