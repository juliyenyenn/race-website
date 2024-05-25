<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>RACE | ADD Schedule</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>

<?php
// Database configuration variables
$host = "localhost";
$user = "root";
$pass = "";
$db = "racedatabase";
$schedID = $time = $day = $courseID = $profID = $roomNumber = $section = $errMsg = $errMsg1 = $errMsg2 = $addErr = $submitMsg = "";

// Establishing a connection to the database
$conn = mysqli_connect($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the form input values
        $schedID = $_POST['schedID'];
        $time = $_POST['time'];
        $day = $_POST['day'];
        $section = $_POST['section'];
        $roomNumber = $_POST['rmnumber'];
        $courseID = $_POST['idcourse'];
        $profID = $_POST['idprof'];

    $sqlCourse = mysqli_query($conn, "select * from course where CourseID= '".$courseID."'");
    $sqlProf = mysqli_query($conn, "select * from professor where ProfID= '".$profID."'");
    $sqlRoom = mysqli_query($conn, "select * from room where RoomNumber= '".$roomNumber."'");

    if(mysqli_num_rows($sqlCourse) > 0 && mysqli_num_rows($sqlProf) > 0 && mysqli_num_rows($sqlRoom) > 0){
        $sql = "INSERT INTO roomsched (SchedID, RoomNumber, CourseID, ProfID, Time, Day, Section) VALUES ('$schedID', '$roomNumber', '$courseID', '$profID', '$time', '$day', '$section')";
        if ($conn->query($sql) === TRUE) {
            // echo '<div class="alert alert-success" role="alert" id="newmessage">New Product Added Successfully.</div>';
            $submitMsg = "Added successfully";
        } 
        else {
            // echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
            $submitMsg = "Added unsuccessfully";
        }
    }
    else{
        if((mysqli_fetch_array($sqlCourse)) == FALSE){
            $errMsg = "Course, ";
        }
        else{
            $errMsg = "";
        }
        if((mysqli_fetch_array($sqlProf)) == FALSE){
            $errMsg1 = "Professor";
        }
        else{
            $errMsg1 = "";
        }
        if((mysqli_fetch_array($sqlRoom)) == FALSE){
            $errMsg2 = ", Room";
        }
        else{
            $errMsg2 = "";
        }
        $addErr = "ERROR: $errMsg $errMsg1 $errMsg2 Unknown!";
    }
    
    // Close the database connection
    $conn->close();
}
?>


<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
    <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
        <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
            <a href="adminhometest.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
            <div>
                <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">
                    <a style="font-weight: bold; font-size:18px" href="adminlogin.php" class="hover:opacity-70 text-mydefault">LOG OUT </a>
                </nav>
            </div>
        </section>
    </header>

    <main class="flex flex-col items-center py-10">
        <h2 class="text-4xl font-bold text-slate-800 dark:text-gray-200 mb-8">ADD SCHEDULE</h2>
        <form class="border-[1.5px] border-slate-950 dark:bg-gray-800 shadow-xl rounded-lg p-8 max-w-lg w-full" method="POST" action="add_sched.php">
            <div class="mb-5">
                <label for="schedID" class="block mb-2 text-sm font-medium">Schedule ID:</label>
                <input name="schedID" type="text" id="schedID" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500" placeholder="Ex: Room105_sched101" required />
            </div>

            <div class="mb-5">
                <label for="time" class="block mb-2 text-sm font-medium">Time:</label>
                <select id="time" name="time" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500">
                    <option selected>Select Time</option>
                    <option value="7:00AM-8:30AM">7:00AM-8:30AM</option>
                    <option value="7:00AM-10:00AM">7:00AM-10:00AM</option>
                    <option value="8:30AM-11:30AM">8:30AM-11:30AM</option>
                    <option value="10:00AM-11:30AM">10:00AM-11:30AM</option>
                    <option value="10:00AM-1:00PM">10:00AM-1:00PM</option>
                    <option value="11:30AM-1:00PM">11:30AM-1:00PM</option>
                    <option value="1:00PM-2:30PM">1:00PM-2:30PM</option>
                    <option value="1:00PM-4:00PM">1:00PM-4:00PM</option>
                    <option value="2:30PM-4:00PM">2:30PM-4:00PM</option>
                    <option value="4:00PM-5:30PM">4:00PM-5:30PM</option>
                    <option value="4:00PM-7:00PM">4:00PM-7:00PM</option>
                    <option value="5:30PM-7:00PM">5:30PM-7:00PM</option>
                </select>
            </div>

            <div class="mb-5">
                <label for="day" class="block mb-2 text-sm font-medium">Day:</label>
                <select id="day" name="day" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500">
                    <option selected>Select Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                </select>
            </div>

            <div class="mb-5">
                <label for="section" class="block mb-2 text-sm font-medium">Section:</label>
                <input name="section" type="text" id="section" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500" placeholder="Ex: UV, B, DL" required />
            </div>

            <div class="mb-5">
                <label for="rmnumber" class="block mb-2 text-sm font-medium">Room Number:</label>
                <input name="rmnumber" type="text" id="rmnumber" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500" placeholder="Ex: 105, 125a, 210a" required />
            </div>

            <div class="mb-5">
                <label for="idcourse" class="block mb-2 text-sm font-medium">Course ID:</label>
                <input name="idcourse" type="text" id="idcourse" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500" placeholder="Ex: BIO 170, AMAT 131, CMSC 127" required />
            </div>

            <div class="mb-5">
                <label for="idprof" class="block mb-2 text-sm font-medium">Professor ID:</label>
                <input name="idprof" type="text" id="idprof" class="block w-full p-2.5 rounded-lg border focus:ring-slate-500 focus:border-slate-500" placeholder="Ex: MCSGuillermo" required />
            </div>

        <span style="font-style: italic; color: red; font-size: 10px; margin-bottom: -10px;"><?php echo $addErr;?></span>
        <span style="font-style: italic; color: red; font-size: 10px; margin-bottom: -10px;"><?php echo $submitMsg;?></span>

        <div style="display: flex; justify-content: center;">
            <input style="font-weight: bold;" class="mt-5 w-[45%] bg-gradient-to-br from-red-950 via-red-950 to-yellow-950 text-white p-2.5 rounded-lg hover:bg-gradient-to-br hover:from-red-300 hover:via-red-400 hover:to-yellow-200 cursor-pointer focus:ring-4 focus:ring-red-300" id="type_submit" type="submit" value="ADD SCHEDULE">
        </div>

    </form>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>

</html>