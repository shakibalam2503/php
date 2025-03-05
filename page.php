<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="username" >Enter username</label>
        <input id="username" type="text" name="username">
        <br>
        <label for="password">Enter Password</label>
        <input id="password" type="password" name="password">
        <br>
        <button>submit</button>
    </form>
</body>

</html>

<?php

echo $_POST["username"];
echo $_POST["password"];

?>