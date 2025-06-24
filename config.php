<?php
$currency = '$'; // Currency symbol or code

// DB settings
$db_username = 'root';
$db_password = 'root';
$db_name = 'somstore';
$db_host = '127.0.0.1'; // Use 'localhost' if MySQL is running on the same machine
$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

