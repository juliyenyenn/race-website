<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>RACE | Update & Delete Schedule</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white font-[Montserrat]">

<header class="bg-red-950 text-amber-100 sticky top-0 z-10">
    <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
        <a href="adminhometest.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
        <div>
            <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                &#9776;
            </button>
            <nav class="hidden sm:block space-x-16 text-base montserrat-black relative" aria-label="main">
                <div class="group inline-block relative">
                    <a class="hover:opacity-70 text-mydefault py-2" style="cursor: pointer;">ROOMS</a>
                    <div class="absolute hidden group-hover:block bg-white text-black mt-0 shadow-xl">
                        <a href="adminroompage1.php" class="block px-6 py-3 hover:bg-red-100 font-[600] text-red-950">1st&nbsp;FLOOR</a>
                        <a href="adminroompage2.php" class="block px-6 py-3 hover:bg-red-100 font-[600] text-red-950">2nd&nbsp;FLOOR</a>
                    </div>
                </div>
                <div class="group inline-block relative">
                    <a class="hover:opacity-70 text-mydefault py-2" style="cursor: pointer;">OPTIONS</a>
                    <div class="absolute hidden group-hover:block bg-white text-black mt-0 shadow-xl">
                        <a href="add_sched.php" class="block px-6 py-3 hover:bg-red-100 font-[600] text-red-950">Add&nbsp;Schedule</a>
                        <a href="updatedelete_sched.php" class="block px-6 py-3 hover:bg-red-100 font-[600] text-red-950">Update&nbsp;&&nbsp;Delete Schedule</a>
                    </div>
                </div>
                <a href="adminlogin.php" class="hover:opacity-70 text-mydefault">LOG OUT</a>
            </nav>
        </div>
    </section>
</header>

<main class="flex flex-col items-center py-10">

<h2 class="text-4xl font-bold text-red-950 dark:text-gray-200 mb-8">SEARCH SCHEDULE</h2>

<form class="addschedule max-w-sm mx-auto" method="POST" action="updatedelete_sched.php">
    <label for="roomnumber" class="block mb-2 text-sm font-medium">Room Number:</label>
    <input id="rmnumber" type="text" name="rmnumber" placeholder="Ex: 105, 125a, 210a" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500" required><br>
    <div class="flex justify-center">
        <input id="type_submit" type="submit" name="submit" class="font-bold mt-5 w-full border-red-950 border-[3px] text-red-950 p-2.5 hover:bg-red-950 hover:text-white hover:cursor-pointer rounded-lg " value="SEARCH ROOM NUMBER">
    </div>
</form><br><br>

<div class="container my-5 overflow-x-auto" style="width: 95%;">
    <table class="table-auto w-full border-collapse border border-slate-200 dark:border-slate-700 shadow-lg text-sm">
    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "racedatabase";

        $connection = mysqli_connect($host, $username, $password, $database);

        if (mysqli_connect_errno()) {
            die("Failed to connect to the database: " . mysqli_connect_error());
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['submit'])) {
                $search = mysqli_real_escape_string($connection, $_POST['rmnumber']);
                $sql = "SELECT * FROM roomsched WHERE RoomNumber = '$search'";
                $result = mysqli_query($connection, $sql);
                
                if ($result && mysqli_num_rows($result) > 0) {
                    echo "<thead class='bg-[#f7ecd9] dark:bg-slate-800'><tr class='text-left text-base font-medium'>";
                    $columns = mysqli_fetch_fields($result);
                    foreach ($columns as $column) {
                        echo "<th class='px-4 py-2 border border-slate-300 dark:border-slate-700'>" . $column->name . "</th>";
                    }
                    echo "<th class='px-4 py-2 border border-slate-300 dark:border-slate-700'>Actions</th>";
                    echo "</tr></thead><tbody class='bg-[#fef9f3] dark:bg-slate-900'>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr class='hover:bg-slate-100 dark:hover:bg-slate-800'>";
                        echo "<form method='POST' action='updatedelete_sched.php'>";
                        foreach ($row as $key => $data) {
                            echo "<td class='border px-4 py-2'><input class='input-field w-full p-2 rounded-lg bg-slate-50 dark:bg-slate-800 border dark:border-slate-700 text-xs' type='text' name='$key' value='$data'></td>";
                        }
                        echo "<td class='border px-2 py-2 flex space-x-2'><button type='submit' name='update' class='btn-update bg-[#e4d2bc] hover:bg-blue-500 hover:text-white text-black font-bold py-2 px-3 text-xs rounded-lg'>UPDATE</button><a href='updatedelete_sched.php?id=".$row['SchedID']."' class='btn-delete bg-[#968268] hover:bg-red-500 hover:text-white text-black font-bold py-2 px-3 text-xs rounded-lg'>DELETE</a></td>";
                        echo "<input type='hidden' name='SchedID' value='".$row['SchedID']."'>";
                        echo "</form>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                } else {
                    echo "<tr><td colspan='100%' class='text-center py-4 text-slate-500 dark:text-slate-400'>No results found for Room Number: $search</td></tr>";
                }
            } elseif (isset($_POST['update'])) {
                $schedID = $_POST['SchedID'];
                $updatedData = array();
                foreach ($_POST as $key => $value) {
                    if ($key !== 'update' && $key !== 'SchedID') {
                        $updatedData[$key] = mysqli_real_escape_string($connection, $value);
                    }
                }

                $updateQuery = "UPDATE roomsched SET ";
                foreach ($updatedData as $key => $value) {
                    $updateQuery .= "$key='$value', ";
                }

                $updateQuery = rtrim($updateQuery, ', ') . " WHERE SchedID='$schedID'";
                $updateResult = mysqli_query($connection, $updateQuery);

                if (!$updateResult) {
                    die("Update failed: " . mysqli_error($connection));
                } else {
                    echo "<div class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4' role='alert'>Record updated successfully!</div>";
                }
            }
        }

        if (isset($_GET['id'])) {
            $schedID = mysqli_real_escape_string($connection, $_GET['id']);
            $deleteQuery = "DELETE FROM roomsched WHERE SchedID='$schedID'";
            $deleteResult = mysqli_query($connection, $deleteQuery);

            if (!$deleteResult) {
                die("Delete failed: " . mysqli_error($connection));
            } else {
                echo "<div class='bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative my-4' role='alert'>Record deleted successfully!</div>";
            }
        }

        mysqli_close($connection);
        ?>
        </table>
    </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
