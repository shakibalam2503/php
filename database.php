<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "catayon";

// Establish connection
$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// Check connection
if ($conn) {
    echo "<script>alert('Connection successful');</script>";
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
