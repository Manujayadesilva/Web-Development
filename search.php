<?php
$servername = "localhost:8889";
$username = "dseuser";
$password = "123";
$dbname = "bus_booking_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $busType = $_GET["busType"];
    $date = date('Y-m-d', strtotime($_GET["date"]));

    $sql = "SELECT * FROM Bookings WHERE Bus_Type = ? AND Date = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $busType, $date);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        $jsonResult = json_encode($rows);

        header('Content-Type: application/json');
        echo $jsonResult;
    } else {
        echo 'No bookings found.';
    }
} else {
    echo 'Invalid request.';
}

$stmt->close();
$conn->close();
?>
