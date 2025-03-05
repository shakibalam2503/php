<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capital Checker</title>
</head>

<body>
    <form action="" method="post">
        <label for="country">Enter you country</label>
        <input id="country" type="text" name="country">
        <button>submit</button>
    </form>
</body>

</html>
<?php
$country=$_POST["country"];

$capital =array("bangladesh"=>"dhaka",
                "usa"=>"washington d.c",
                "hungary"=>"budapest"

);
echo "{$capital["$country"]}";


?>