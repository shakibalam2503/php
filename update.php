<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white shadow-xl rounded-2xl p-8">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Sign Up</h2>
        
        <form action="newSqlHtml.php" method="POST" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="block text-gray-700 font-medium">Enter Name</label>
                    <input type="text" id="name" name="name" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label for="education" class="block text-gray-700 font-medium">Education Qualification</label>
                    <input type="text" id="education" name="education" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label for="phone" class="block text-gray-700 font-medium">Phone Number</label>
                    <input type="tel" id="phone" name="phone" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div>
                    <label for="role" class="block text-gray-700 font-medium">Role</label>
                    <input type="text" id="role" name="role" required 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
            </div>
            
            <div class="flex flex-col gap-3 mt-4">
                <button type="submit" name="submit" 
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition">
                    Register
                </button>
                <a href="stored.php" 
                    class="w-full text-center bg-green-600 hover:bg-green-700 text-white font-semibold py-2 rounded-lg transition">
                    Check Form
                </a>
            </div>
        </form>
    </div>
</body>

</html>


<?php
include "database.php";
$id=$_POST["ID"];

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $education=$_POST["education"];
    $phone=$_POST["phone"];
    $role=$_POST["role"];
    $insertQuery="INSERT INTO candidate(NAME,DEGREE,MOBILE,ROLE) VALUES ('$name','$education','$phone','$role')";
    $res=mysqli_query($conn,$insertQuery);
    if($res){
        echo "<script>alert('Inserted successfully');</script>";
    }
    else{
        echo "<script>alert('Not inserted successfully');</script>";
    }
}
?>
