<?php

function auth()
{
    if (isset($_POST['key'])) {
        if ($_POST['key'] == 'F44aSGHUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb21wYW55X2lkIjo3MzAsImNyZWF0ZWRfYXQiOiIyMDIyLTA0LTExVDE0OjE3') {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
