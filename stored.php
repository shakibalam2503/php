<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-6xl bg-white shadow-xl rounded-lg p-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">
                Number of Candidates
            </h1>
            <!-- Add New Candidate Button -->
            <a href="newSqlHtml.php" class="bg-green-500 text-white px-4 py-2 rounded-lg shadow-md hover:bg-green-600 transition">
                + Add Candidate
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border border-gray-300 bg-white rounded-lg shadow-md">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left border border-gray-300">ID</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Name</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Degree</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Mobile</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Role</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Created</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("database.php");
                    $selectQuery = "SELECT * FROM candidate";
                    $query = mysqli_query($conn, $selectQuery);

                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr class="hover:bg-gray-100 transition">
                            <td class="px-6 py-4 border border-gray-300"><?php echo $data['ID']; ?></td>
                            <td class="px-6 py-4 border border-gray-300"><?php echo $data['NAME']; ?></td>
                            <td class="px-6 py-4 border border-gray-300"><?php echo $data['DEGREE']; ?></td>
                            <td class="px-6 py-4 border border-gray-300"><?php echo $data['MOBILE']; ?></td>
                            <td class="px-6 py-4 border border-gray-300"><?php echo $data['ROLE']; ?></td>
                            <td class="px-6 py-4 border border-gray-300"><?php echo $data['CREATED']; ?></td>
                            <td class="px-6 py-4 border border-gray-300 flex items-center gap-3">
                                <!-- Update Button with Tooltip -->
                                <div class="relative group">
                                    <a href="update.php?id=<?php echo $data['ID']; ?>">
                                        <i class="fa-solid fa-pen-to-square text-blue-500 cursor-pointer hover:text-blue-700"></i>
                                    </a>
                                    <span class="absolute left-1/2 -translate-x-1/2 top-full mt-1 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition">
                                        Update
                                    </span>
                                </div>

                                <!-- Trash Button with Tooltip -->
                                <div class="relative group">
                                    <i class="fa-solid fa-trash text-red-500 cursor-pointer hover:text-red-700"></i>
                                    <span class="absolute left-1/2 -translate-x-1/2 top-full mt-1 bg-gray-800 text-white text-xs py-1 px-2 rounded opacity-0 group-hover:opacity-100 transition">
                                        Trash
                                    </span>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>