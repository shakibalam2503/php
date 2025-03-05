<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input type="radio" name="payment" id="" value="visa">visa<br>
        <input type="radio" name="payment" id="" value="masterCard">mastercard<br>
        <input type="radio" name="payment" id="" value="bkash">bkash<br>
        <input type="submit" name="submit" value="confirm">

    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    if(isset($_POST["payment"])){
        $payemnt=$_POST["payment"];
        echo $payemnt;
    }else{
        echo "enter valid gateway";
    }
    
}


?>