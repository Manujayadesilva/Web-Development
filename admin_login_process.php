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
 
    $username = $conn->real_escape_string($_POST["username"]);
    $password = $conn->real_escape_string($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM Admin WHERE U_Name = ? AND U_Password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>window.location.href = 'AdminView.html';</script>";
        exit(); 
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
}

$conn->close();
?>
