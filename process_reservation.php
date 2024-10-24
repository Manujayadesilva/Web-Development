<?php
$servername = "localhost:8889";
$username = "dseuser";
$password = "123";
$dbname = "bus_booking_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $date = date('Y-m-d', strtotime($_POST["date"]));
    $busType = $_POST["busType"];
    $departingFrom = $_POST["departingFrom"];
    $arrivingAt = $_POST["arrivingAt"];
    $numberOfTickets = $_POST["numberOfTickets"];

    $sql = "INSERT INTO Bookings (User_Name, Date, Bus_Type, Departing_From, Arriving_At, Number_Of_Tickets) 
            VALUES ('$name', '$date', '$busType', '$departingFrom', '$arrivingAt', $numberOfTickets)";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
