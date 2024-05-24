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

if (isset($_GET['room_key'])) {
    $room_key = $conn->real_escape_string($_GET['room_key']);

    $sql = "SELECT RoomNumber, ExamID, CourseID, ProfID, Time, Day, Section FROM roomsched WHERE SchedID LIKE '$room_key%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>RoomNumber</th>
                    <th>ExamID</th>
                    <th>CourseID</th>
                    <th>ProfID</th>
                    <th>Time</th>
                    <th>Day</th>
                    <th>Section</th>
                </tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["RoomNumber"] . "</td>
                    <td>" . $row["ExamID"] . "</td>
                    <td>" . $row["CourseID"] . "</td>
                    <td>" . $row["ProfID"] . "</td>
                    <td>" . $row["Time"] . "</td>
                    <td>" . $row["Day"] . "</td>
                    <td>" . $row["Section"] . "</td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No results found for room key $room_key.";
    }
} else {
    echo "No room key provided.";
}

$conn->close();
?>
