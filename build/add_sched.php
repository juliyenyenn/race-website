<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>RACE | ADD Schedule</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    <style>
        
        
        h2 {
            color: black;
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }
        
        .addschedule {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        
        label {
            color: black;
            font-size: 16px;
            margin-bottom: 10px;
        }

        
        #type_text,#type_text2,
        textarea {
            width: 300px;
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 4px;
            background-color: whitesmoke;
            color: black;
        }
        
        .type_file {
            margin-top: 5px;
            margin-left: 100px;
        }
        
        #type_submit {
            width: 150px;
            padding: 10px;
            background-color:#3D2B1F;
            color: #F4EEE8;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 30px;
        }
        
        #type_submit:hover {
            background-color:ForestGreen;
            color: white;
        }

        .addsched {
            font-size: 40px;
            margin-top: 60px;
            margin-bottom: 70px;
        }

        #newmessage {
            margin-top: 30px;
            margin-bottom: 35px;
            text-align: center;
        }
    </style>


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


<body>

<body class="min-h-screen bg-[#FFFAEF] dark:bg-black dark:text-white">
    <header class="bg-red-950 text-amber-100 sticky top-0 z-10">
        <section class="max-w-6xl mx-auto p-4 flex justify-between items-center">
            <a href="adminhometest.php"><img src="img/logobeige.png" class="size-32 mx-auto -mt-11 -mb-11" alt="LOGO"></a>
            <div>
                <button id="mobile-open-button" class="text-2xl sm:hidden focus:outline-none">
                    &#9776;
                </button>
                <nav class="hidden sm:block space-x-16 text-base montserrat-black" aria-label="main">
                    <a href="add_sched.php" class="hover:opacity-70 text-mydefault">ADD </a>
                    <a href="updatedelete_sched.php" class="hover:opacity-70 text-mydefault">UPDATE & DELETE </a>
                </nav>
            </div>
        </section>
        
    </header>

    <h2 class="addsched">ADD SCHEDULE</h2>
    <form class="addschedule max-w-sm mx-auto" method="POST" action="add_sched.php">

        <label for="section">Schedule ID:</label>
        <input id="type_text" type="text" name="schedID" id="schedID" placeholder="Ex: Room105_sched101" required><br> <!--required-->
    
        <label for="time" class="block mb-2 text-gray-900 dark:text-white">Time:</label>
        <select id="time" name = "time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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

        <label for="day" class="block mb-2 text-gray-900 dark:text-white">Day:</label>
        <select id="day" name = "day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Select Day</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
        </select>
    
        <label for="section">Section:</label>
        <input id="type_text" type="text" name="section" id="section" placeholder="Ex: UV, B, DL" required><br>

        <label for="rmnumber">Room Number:</label>
        <input id="type_text" type="text" name="rmnumber" id="rmnumber" placeholder="Ex: 105, 125a, 210a" required><br>

        <label for="idcourse">Course ID:</label>
        <input id="type_text" type="text" name="idcourse" id="idcourse" placeholder="Ex: BIO 170, AMAT 131, CMSC 127" required><br>

        <label for="idprof">Professor ID:</label>
        <input id="type_text" type="text" name="idprof" id="idprof" placeholder="Ex: MCSGuillermo" required><br>
        <span style="font-style: italic; color: red; font-size: 10px; margin-bottom: -10px;"><?php echo $addErr;?> </span>
        <span style="font-style: italic; color: red; font-size: 10px; margin-bottom: -10px;"><?php echo $submitMsg;?> </span>
        

        <input id="type_submit" type="submit" value="Add Schedule">
    </form><br><br><br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>

