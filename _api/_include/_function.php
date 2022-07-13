<?php

function auth()
{
    if (isset($_REQUEST['key'])) {
        if ($_REQUEST['key'] == 'F44aSGHUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb21wYW55X2lkIjo3MzAsImNyZWF0ZWRfYXQiOiIyMDIyLTA0LTExVDE0OjE3') {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function request($process, $method, $query = null)
{
    $url = API_URL;
    $query['key'] = 'F44aSGHUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb21wYW55X2lkIjo3MzAsImNyZWF0ZWRfYXQiOiIyMDIyLTA0LTExVDE0OjE3';
    $query['process'] = $process;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch,  CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if ($method == 'GET') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    } else if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($query));
    } else if ($method == 'PUT') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query, JSON_UNESCAPED_UNICODE));
    } else if ($method == 'DELETE') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
    } else {
        throw new Exception('Metod belirtilmedi!');
    }
    $raw = curl_exec($ch);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch));
    }
    return json_decode($raw);
}

function mailSend($content, $subject, $email, $name)
{
    if ($content and $subject and $email and $name) {
        include('mail/class.phpmailer.php');
        include('mail/class.smtp.php');
        $MailSmtpHost = "smtp.yandex.com.tr";
        $MailUserName = "hamarat.tech@yandex.com";
        $MailPassword = "kn1Gr?39";
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = $MailSmtpHost;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->Username = $MailUserName;
        $mail->Password = $MailPassword;
        $mail->SetFrom($mail->Username, 'hamarat.tech');
        $mail->AddAddress("$email", "$name");
        $mail->AddAddress("mhamarat13@gmail.com", "Muhammet");
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $subject;
        $mail->MsgHTML("$content");
        if ($mail->Send()) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
