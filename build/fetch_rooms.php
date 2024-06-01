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

if (isset($_GET['room_key'])) {
    $room_key = $conn->real_escape_string($_GET['room_key']);

    $sql = "SELECT ExamID, CourseID, ProfID, Time, Day, Section FROM roomsched WHERE SchedID LIKE '$room_key%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div style='margin-top:-43%'>";
        echo "<div id='schedule-table' class='relative z-50 overflow-x-auto w-full max-w-4xl mx-auto table-container'>
                <table class='w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400'>
                    <thead class='font-[Montserrat] text-xs text-gray-800 uppercase bg-[#f7ecd9] dark:bg-gray-900 dark:text-gray-400'>
                        <tr>
                            <th colspan='6' class='font-[Montserrat] px-6 py-4 text-lg font-bold text-center text-gray-900 bg-[#cebfa4] dark:bg-gray-800 dark:text-white relative'>
                            $room_key Schedule Information
                                <button onclick='closeTable()' class='absolute top-[50%] right-4 transform -translate-y-1/2 text-gray-900 dark:text-white text-[35px] p-2 hover:text-red-700'>
                                    &times;
                                </button>
                            </th>
                        </tr>
                        <tr>
                            <th scope='col' class='px-6 py-3'>ExamID</th>
                            <th scope='col' class='px-6 py-3'>CourseID</th>
                            <th scope='col' class='px-6 py-3'>ProfID</th>
                            <th scope='col' class='px-6 py-3'>Time</th>
                            <th scope='col' class='px-6 py-3'>Day</th>
                            <th scope='col' class='px-6 py-3'>Section</th>
                        </tr>
                    </thead>
                    <tbody>";
        while($row = $result->fetch_assoc()) {
            echo "<tr class='bg-[#FFFAEF] dark:bg-gray-800 font-[Montserrat]'>
                    <td class='px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white'>" . $row["ExamID"] . "</td>
                    <td class='px-6 py-4'>" . $row["CourseID"] . "</td>
                    <td class='px-6 py-4'>" . $row["ProfID"] . "</td>
                    <td class='px-6 py-4'>" . $row["Time"] . "</td>
                    <td class='px-6 py-4'>" . $row["Day"] . "</td>
                    <td class='px-6 py-4'>" . $row["Section"] . "</td>
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
