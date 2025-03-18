<?php
// Include database connection
include("database.php");

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Insert query
$sql = "INSERT INTO users (userName, password) VALUES ('shafi', '45454')";

// Execute query and check for errors
if (mysqli_query($conn, $sql)) {
    echo "New record added successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
