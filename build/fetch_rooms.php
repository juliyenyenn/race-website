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
            max-height: 550px;
            overflow-y: auto;
            transform: scale(0.8);
            opacity: 0;
            animation: growIn 0.5s forwards;
            max-width: 77%;
        }
        .table-container table {
            width: 100%;
        }
        .table-container td,
        .table-container th {
            white-space: nowrap;
        }
        .table-container {
            font-size: 0.9rem; /* Initial font size */
        }
        .table-container .profid {
            font-size: 0.8rem; /* Smaller font size for PROFID */
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

    // Check if $parts has at least two elements before accessing index 1
    if (count($parts) >= 2) {
        $hours = intval($parts[0]);
        $minutes = intval($parts[1]);

        // Convert to 24-hour format
        if (strpos($time, 'PM') !== false && $hours != 12) {
            $hours += 12;
        } elseif (strpos($time, 'AM') !== false && $hours == 12) {
            $hours = 0;
        }

        return $hours * 60 + $minutes;
    } else {
        // Handle case where $parts doesn't have enough elements
        return 0; // Or any default value as needed
    }
}

function minutesToTime($minutes) {
    $hours = intdiv($minutes, 60);
    $mins = $minutes % 60;
    $period = $hours >= 12 ? 'PM' : 'AM';

    if ($hours > 12) {
        $hours -= 12;
    } elseif ($hours == 0) {
        $hours = 12;
    }

    return sprintf("%d:%02d%s", $hours, $mins, $period);
}

if (isset($_GET['room_key'])) {
    $room_key = $conn->real_escape_string($_GET['room_key']);

    $sql = "SELECT ExamID, CourseID, ProfID, Time, Day, Section FROM roomsched WHERE SchedID LIKE '$room_key%'";
    $result = $conn->query($sql);

    $schedule = [
        "7:00AM-8:30AM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
        "8:30AM-10:00AM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
        "10:00AM-11:30AM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
        "11:30AM-1:00PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
        "1:00PM-2:30PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
        "2:30PM-4:00PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
        "4:00PM-5:30PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""],
        "5:30PM-7:00PM" => ["Monday" => "", "Tuesday" => "", "Wednesday" => "", "Thursday" => "", "Friday" => "", "Saturday" => ""]
    ];

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $time = $row["Time"];
            $day = $row["Day"];
            $course_info = "<b>". $row["CourseID"] . "</b>" . "<br><span class='profid'>" . $row["ProfID"] . "</span><br>" . $row["Section"];

            // Determine the start and end time in minutes
            $time_parts = explode('-', $time);
            if (isset($time_parts[1])) {
                $start_time = $time_parts[0];
                $end_time = $time_parts[1];
                $start_minutes = timeToMinutes($start_time);
                $end_minutes = timeToMinutes($end_time);

                // Assign course info to the correct time slots
                foreach ($schedule as $slot => &$days) {
                    $slot_parts = explode('-', $slot);

                    if (isset($slot_parts[1])) {
                        $slot_start = $slot_parts[0];
                        $slot_end = $slot_parts[1];
                        $slot_start_minutes = timeToMinutes($slot_start);
                        $slot_end_minutes = timeToMinutes($slot_end);

                        if ($start_minutes < $slot_end_minutes && $end_minutes > $slot_start_minutes) {
                            if (empty($days[$day])) {
                                $days[$day] = $course_info;
                            } else {
                                $next_slot_end_minutes = $slot_end_minutes;
                                while ($end_minutes > $next_slot_end_minutes) {
                                    $next_slot = minutesToTime($next_slot_end_minutes) . '-' . minutesToTime($next_slot_end_minutes + 90);
                                    if (isset($schedule[$next_slot])) {
                                        if (empty($schedule[$next_slot][$day])) {
                                            $schedule[$next_slot][$day] = $course_info;
                                        }
                                    }
                                    $next_slot_end_minutes += 90;
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    echo "<div style='margin-top:-47%'>";
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
                <td class='px-6 py-4'>" . (isset($days['Monday']) ? $days['Monday'] : '') . "</td>
                <td class='px-6 py-4'>" . (isset($days['Tuesday']) ? $days['Tuesday'] : '') . "</td>
                <td class='px-6 py-4'>" . (isset($days['Wednesday']) ? $days['Wednesday'] : '') . "</td>
                <td class='px-6 py-4'>" . (isset($days['Thursday']) ? $days['Thursday'] : '') . "</td>
                <td class='px-6 py-4'>" . (isset($days['Friday']) ? $days['Friday'] : '') . "</td>
                <td class='px-6 py-4'>" . (isset($days['Saturday']) ? $days['Saturday'] : '') . "</td>
            </tr>";
    }

    echo "</tbody>
            </table>
          </div>
        </div>";
} else {
    renderMessageTable("No room key provided.");
}

$conn->close();
?>

<script>
function closeTable() {
    document.getElementById('schedule-table').style.display = 'none';
    $('#overlay').addClass('hidden'); // Hide overlay
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