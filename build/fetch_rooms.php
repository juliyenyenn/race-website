<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>RACE | Room Schedule</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <style>
        .table-container {
            max-height: 470px;
            overflow-y: auto;
            transform: scale(0.8);
            opacity: 0;
            animation: growIn 0.5s forwards;
        }
        .table-container table {
            width: 100%;
        }
        .table-container td,
        .table-container th {
            white-space: nowrap;
        }
        .table-container {
            font-size: 1rem; /* Initial font size */
        }

        @keyframes growIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "racedatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function renderMessageTable($message) {
    echo "<div style='margin-top:-42%'>
            <div id='schedule-table' class='relative z-50 overflow-x-auto w-full max-w-4xl mx-auto table-container'>
                <table class='w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400'>
                    <thead class='font-[Montserrat] text-xs text-gray-700 uppercase bg-[#FFFAEF] dark:bg-gray-700 dark:text-gray-400'>
                        <tr>
                            <th colspan='6' class='font-[Montserrat] px-6 py-4 text-lg font-bold text-center text-gray-900 bg-[#cebfa4] dark:bg-gray-800 dark:text-white relative'>
                                Schedule Information
                                <button onclick='closeTable()' class='absolute top-[45%] right-4 transform -translate-y-1/2 text-gray-900 dark:text-white text-3xl p-2 hover:text-red-700'>
                                    &times;
                                </button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class='font-[Montserrat] bg-[#FFFAEF] dark:bg-gray-800'>
                            <td colspan='6' class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center'>$message</td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>";
}

function timeToMinutes($time) {
    $parts = explode(':', $time);
    $hours = intval($parts[0]);
    $minutes = intval($parts[1]);

    // Convert to 24-hour format
    if (strpos($time, 'PM') !== false && $hours != 12) {
        $hours += 12;
    } elseif (strpos($time, 'AM') !== false && $hours == 12) {
        $hours = 0;
    }

    return $hours * 60 + $minutes;
}

if (isset($_GET['room_key'])) {
    $room_key = $conn->real_escape_string($_GET['room_key']);

    $sql = "SELECT ExamID, CourseID, ProfID, Time, Day, Section FROM roomsched WHERE SchedID LIKE '$room_key%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $schedule = [
            "7:00-8:30 AM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
            "8:30-10:00 AM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
            "10:00-11:30 AM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
            "11:30-1:00 PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
            "1:00-2:30 PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
            "2:30-4:00 PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
            "4:00-5:30 PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
            "5:30-7:00 PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""]
        ];

        while($row = $result->fetch_assoc()) {
            $time = $row["Time"];
            $day = $row["Day"];
            $course_info = "<b>". $row["CourseID"] . "</b>" . "<br>" . $row["ProfID"] . "<br>" . $row["Section"];

            // Determine the start and end time in minutes
            list($start_time, $end_time) = explode('-', $time);
            $start_minutes = timeToMinutes($start_time);
            $end_minutes = timeToMinutes($end_time);

            // Assign course info to the correct time slots
            foreach ($schedule as $slot => &$days) {
                list($slot_start, $slot_end) = explode('-', $slot);
                $slot_start_minutes = timeToMinutes($slot_start);
                $slot_end_minutes = timeToMinutes($slot_end);

                if ($start_minutes >= $slot_start_minutes && $start_minutes < $slot_end_minutes) {
                    $days[$day] = $course_info;
                    if ($end_minutes > $slot_end_minutes) {
                        $next_slot_minutes = $slot_end_minutes + 90;
                        $next_slot_time = sprintf('%02d:%02d-%02d:%02d', floor($next_slot_minutes / 60), $next_slot_minutes % 60, floor(($next_slot_minutes + 90) / 60), ($next_slot_minutes + 90) % 60);
                        if (isset($schedule[$next_slot_time])) {
                            $schedule[$next_slot_time][$day] = $course_info;
                        }
                    }
                }
            }
        }

        echo "<div style='margin-top:-43%'>";
        echo "<div id='schedule-table' class='relative z-50 overflow-x-auto w-full max-w-4xl mx-auto table-container'>
                <table class='w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400'>
                    <thead class='font-[Montserrat] text-xs text-gray-800 uppercase bg-[#f7ecd9] dark:bg-gray-900 dark:text-gray-400'>
                        <tr>
                            <th colspan='7' class='font-[Montserrat] px-6 py-4 text-lg font-bold text-center text-gray-900 bg-[#cebfa4] dark:bg-gray-800 dark:text-white relative'>
                            $room_key Schedule Information
                                <button onclick='closeTable()' class='absolute top-[50%] right-4 transform -translate-y-1/2 text-gray-900 dark:text-white text-[35px] p-2 hover:text-red-700'>
                                    &times;
                                </button>
                            </th>
                        </tr>
                        <tr>
                            <th scope='col' class='px-6 py-3'>Time</th>
                            <th scope='col' class='px-6 py-3'>Monday</th>
                            <th scope='col' class='px-6 py-3'>Tuesday</th>
                            <th scope='col' class='px-6 py-3'>Wednesday</th>
                            <th scope='col' class='px-6 py-3'>Thursday</th>
                            <th scope='col' class='px-6 py-3'>Friday</th>
                            <th scope='col' class='px-6 py-3'>Saturday</th>
                        </tr>
                    </thead>
                    <tbody>";

        foreach ($schedule as $time => $days) {
            echo "<tr class='bg-[#FFFAEF] dark:bg-gray-800 font-[Montserrat]'>
                    <td class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>$time</td>
                    <td class
                    <td class='px-6 py-4'>{$days['Monday']}</td>
                    <td class='px-6 py-4'>{$days['Tuesday']}</td>
                    <td class='px-6 py-4'>{$days['Wednesday']}</td>
                    <td class='px-6 py-4'>{$days['Thursday']}</td>
                    <td class='px-6 py-4'>{$days['Friday']}</td>
                    <td class='px-6 py-4'>{$days['Saturday']}</td>
                </tr>";
        }

        echo "</tbody>
                </table>
              </div>
            </div>";
    } else {
        renderMessageTable("No results found for room $room_key.");
    }
} else {
    renderMessageTable("No room key provided.");
}

$conn->close();
?>

<script>
function closeTable() {
    document.getElementById('schedule-table').style.display = 'none';
}

function adjustFontSize() {
    const container = document.querySelector('.table-container');
    const table = container.querySelector('table');
    let fontSize = parseFloat(window.getComputedStyle(container).fontSize);

    while (table.scrollHeight > container.clientHeight && fontSize > 0.5) {
        fontSize -= 0.1;
        container.style.fontSize = fontSize + 'rem';
    }
}

window.addEventListener('load', () => {
    adjustFontSize();
    document.getElementById('schedule-table').style.opacity = '1'; // Trigger animation
});
window.addEventListener('resize', adjustFontSize);
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
