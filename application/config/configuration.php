<?php

session_start();

if ($_SERVER['REQUEST_URI'] == '/my-orders.php' ||  $_SERVER['REQUEST_URI'] == '/checkout.php'||  $_SERVER['REQUEST_URI'] == '/shoping-cart.php') {
    // Check if the session variable 'username' is set
    if (!isset($_SESSION['sessionID'])) {
        // If it's not set, redirect to the homepage
        header('Location: index.php');
        exit();
    } else {
        $sessionID = $_SESSION['sessionID'];
    }
}
$IP_address = '127.0.0.1';
$port_address = '4800';
$host_address = 'http://127.0.0.1:4000/api/v1';
$currency_symbol = 'LKR';
$numberOfRows = 50;
$sessionID = 1;
$fileUpload = 'http://127.0.0.1:4000/api/v1';
// 139.162.44.140-a
?>