<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club entry </title>
</head>
<body>
    <form action="" method="post">

        <label for="age">Enter your age:</label>
        <input type="text" name="age">
        <button>submit</button>
    </form>
</body>
</html>


<?php

    $age=$_POST["age"];
    if ($age < 18) {
        echo "underage";
    }
    else{
        echo "adult";
    }

?>