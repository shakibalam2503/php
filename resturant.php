<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="quantity">Enter quantity:</label>
        <input id="quantity" type="text" name="quantity">
        <button>submit</button>
    </form>
</body>
</html>


<?php
$price=10;
$quantity=$_POST["quantity"];
$total=$quantity*$price;
echo "bill :{$total} ";

?>