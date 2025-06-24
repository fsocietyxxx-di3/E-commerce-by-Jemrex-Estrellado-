<?php
include('../config.php');

$sql = "INSERT INTO employee (Employee_Name, Username, Password, Picture) 
VALUES ('$_POST[fullname]', '$_POST[username]', '$_POST[password]', '$_POST[picture]')";

if (!mysqli_query($mysqli, $sql)) {
    die('Error: ' . mysqli_error($mysqli));
}

mysqli_close($mysqli);

// Output the message after the database operation
$message = "1 record added";

// Redirect after the message is echoed
header("Location: Employee.php");
exit; // Ensure no further output is sent after the header
?>
