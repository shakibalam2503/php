<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>
<body>
    <form action="" method="post">
        <label for="counter">Enter number</label>
        <input id="counter" type="text" name="counter">
        <button>submit</button>
    </form>
</body>
</html>

<?php
$counter =$_POST["counter"];
for ($i=0; $i < $counter; $i++) { 
    echo $i ."<br>";
}


?>