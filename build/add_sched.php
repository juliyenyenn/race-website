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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database configuration variables
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "race-website";

    // Establishing a connection to the database
    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
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
    <form class="addschedule max-w-sm mx-auto" method="POST" action="add_product.php">
        
        <label for="time" class="block mb-2 text-gray-900 dark:text-white">Time:</label>
        <select id="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Select Time</option>
            <option value="7-8">7:00AM-8:30AM</option>
            <option value="7-10">7:00AM-10:00AM</option>
            <option value="8-10">8:30AM-10:00AM</option>
            <option value="8-11">8:30AM-11:30AM</option>
            <option value="10-11">10:00AM-11:30AM</option>
            <option value="10-1">10:00AM-1:00PM</option>
            <option value="11-1">11:30AM-1:00PM</option>
            <option value="1-2">1:00PM-2:30PM</option>
            <option value="1-4">1:00PM-4:00PM</option>
            <option value="2-4">2:30PM-4:00PM</option>
            <option value="4-5">4:00PM-5:30PM</option>
            <option value="4-7">4:00PM-7:00PM</option>
            <option value="5-7">5:30PM-7:00PM</option>
        </select>

        <label for="day" class="block mb-2 text-gray-900 dark:text-white">Day:</label>
        <select id="day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Select Day</option>
            <option value="Mon">Monday</option>
            <option value="Tues">Tuesday</option>
            <option value="Wed">Wednesday</option>
            <option value="Thurs">Thursday</option>
            <option value="Fri">Friday</option>
        </select>
    
        <label for="section">Section:</label>
        <input id="type_text" type="text" name="section" id="section" placeholder="Ex: UV, B, DL" required><br>

        <label for="rmnumber">Room Number:</label>
        <input id="type_text" type="text" name="rmnumber" id="rmnumber" placeholder="Ex: 105, 125a, 210a" required><br>

        <label for="rmname">Room Name:</label>
        <input id="type_text" type="text" name="rmname" id="rmname" placeholder="Ex: Molecular Biology Lab" required><br>

        <label for="capacity" class="block mb-2 text-gray-900 dark:text-white">Capacity:</label>
        <select id="capacity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>0</option>
            <option value="20">20-25</option>
            <option value="25">25-30</option>
            <option value="30">30-35</option>
            <option value="35">35-40</option>
            <option value="40">40-45</option>
            <option value="45">45-50</option>
            <option value="50">50-55</option>
            <option value="55">55-60</option>
            <option value="60">60-65</option>
            <option value="65">65-70</option>
            <option value="70">70-80</option>
            <option value="80">80-90</option>
            <option value="90">90-100</option>
            <option value="100">100+</option>
        </select>

        <label for="rmtype" class="block mb-2 text-gray-900 dark:text-white">Room Type:</label>
        <select id="rmtype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-30 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Select Room Type</option>
            <option value="Dispense">Dispense</option>
            <option value="Equipment">Equipment</option>
            <option value="Instrument">Instrument</option>
            <option value="Isolation">Isolation</option>
            <option value="Laboratory">Laboratory</option>
            <option value="Lecture">Lecture</option>
            <option value="Office">Office</option>
            <option value="Research">Research</option>
            <option value="Utility">Utility</option>
        </select>

        <label for="idcourse">Course ID:</label>
        <input id="type_text" type="text" name="idcourse" id="idcourse" placeholder="Ex: BIO 170, AMAT 131, CMSC 127" required><br>

        <label for="coursetitle">Course Title:</label>
        <input id="type_text" type="text" name="coursetitle" id="coursetitle" placeholder="Ex: File Processing and Database Systems" required><br>

        <label for="idprof">Professor ID:</label>
        <input id="type_text" type="text" name="idprof" id="idprof" placeholder="Ex: MCSGuillermo" required><br>

        <input id="type_submit" type="submit" value="Add Schedule">
    </form><br><br><br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>

