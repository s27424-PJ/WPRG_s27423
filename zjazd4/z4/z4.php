<?php

$userIP = $_SERVER['REMOTE_ADDR'];

$ipListFile = 'ip_list.txt';
$allowedIPs = file($ipListFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


if (in_array($userIP, $allowedIPs)) {

    require_once 'special_page.php';
} else {

    require_once 'standard_page.php';
}
?>
