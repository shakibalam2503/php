<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="newInput.php" method="post">  
        <label for="inputText">Enter you favoutite:</label>
        <input type="text" name="inputText">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
$var=$_POST["inputText"];
if ($var=="green") {
    echo "green baby";
}
?>