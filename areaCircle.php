<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area and parameter</title>
</head>

<body>
    <form action="" method="post">
        <label for="circle">Enter your radius:</label>
        <input type="text" name="circle">
        <button>Submit</button>
    </form>
</body>

</html>
<?php
$radius =$_POST["circle"];

$area= pi() * $radius * $radius;
$parameter = 2 * pi() * $radius;

echo " area : {$area}<br>";
echo "parameter : {$parameter}"

?>