<?php
include("database.php");
$sql= "select * from users where userName='jisan'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    $row = mysqli_fetch_assoc($result);
    echo $row["id"] ."<br>";
    echo $row["userName"] ."<br>";
    echo $row["password"] ."<br>";
}

mysqli_close($conn);
?> 