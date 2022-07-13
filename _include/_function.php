<?php
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
