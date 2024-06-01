<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>RACE | UPDATE & DELETE Schedule</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>
<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
    <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
        <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
            <a href="adminhometest.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
            <div>
                <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">
                    <a style="font-size:18px" href="adminlogin.php" class="hover:opacity-70 text-mydefault">LOG OUT </a>
                </nav>
            </div>
        </section>
    </header>

    <main class="flex flex-col items-center py-10">

    <h2 class="text-4xl font-bold text-slate-800 dark:text-gray-200 mb-8">SEARCH SCHEDULE</h2>

    <form class="addschedule max-w-sm mx-auto" method="POST" action="updatedelete_sched.php">

        <label for="roomnumber" class="block mb-2 text-sm font-medium">Room Number:</label>
        <input id="rmnumber" type="text" name="rmnumber" placeholder="Ex: 105, 125a, 210a" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500" required><br>

        <div style="display: flex; justify-content: center;">
        <input id="type_submit" type="submit" name="submit" class="font-bold mt-5 w-[105%] bg-gradient-to-br from-red-950 via-red-950 to-yellow-950 text-white p-2.5 rounded-lg hover:bg-gradient-to-br hover:from-red-300 hover:via-red-400 hover:to-yellow-200 cursor-pointer focus:ring-4 focus:ring-red-300" value="SEARCH ROOM NUMBER">
        </div>

    </form><br><br>

    <div class="container my-5">
        <table class="table">
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
                        echo "<thead><tr>";
                        $columns = mysqli_fetch_fields($result);
                        foreach ($columns as $column) {
                            echo "<th>" . $column->name . "</th>";
                        }
                        echo "<th>Actions</th>";
                        echo "</tr></thead><tbody>";

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<form method='POST' action='updatedelete_sched.php'>";
                            foreach ($row as $key => $data) {
                                echo "<td><input class='input-field' type='text' name='$key' value='$data'></td>";
                            }
                            echo "<td><button type='submit' name='update' class='btn-update'>Update</button></td>";
                            echo "<td><a href='updatedelete_sched.php?id=".$row['SchedID']."' class='btn-delete'>Delete</a></td>";
                            echo "<input type='hidden' name='SchedID' value='".$row['SchedID']."'>";
                            echo "</form>";
                            echo "</tr>";
                        }
                        echo "</tbody>";
                    } else {
                        echo "<tr><td colspan='100%'>No results found for Room Number: $search</td></tr>";
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
                        echo "Record updated successfully";
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
                    echo "Record deleted successfully";
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
