<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">Enter Username:</label>
        <input type="text" name="username">
        <label for="username">Enter passweod:</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
foreach($_POST as $key => $value){
    echo "{$key} = {$value}<br>"; 
}
?>