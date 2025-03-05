<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <input type="checkbox" name="courses[]" id="" value="dsa">Dsa <br>
        <input type="checkbox" name="courses[]" id="" value="dbms">dbms <br>
        <input type="checkbox" name="courses[]" id="" value="oop">oop <br>
        <input type="checkbox" name="courses[]" id="" value="sad">sad <br>
        <input type="checkbox" name="courses[]" id="" value="vector">vector <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>

<?php



if (isset($_POST["submit"])) {
    $courses = $_POST["courses"];
    if (isset($courses)) {
        foreach ($courses as $course) {
            echo $course . "<br>";
        }
    }else{
        echo "please choose a option";
    }
}

?>