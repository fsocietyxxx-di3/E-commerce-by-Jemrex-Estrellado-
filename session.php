<?php
include('config.php');
session_start();
$check = $_SESSION['login_username'];
$session = mysqli_query($mysqli, "select Username from employee where Username='$check'");
$row = mysqli_fetch_array($session);
$login_session = $row['Username'];
if (!isset($login_session)) {
    // Remove the output "You Failed !!"
    header('Location: index.php');
    exit; // Ensure no further output is sent after the header
}
?>
