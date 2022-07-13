<?php
if (auth()) {
    $result['status'] = true;
    $result['message'] = $lang['success'];
} else {
    $result['status'] = false;
    $result['message'] = $lang['error_auth'];
}
