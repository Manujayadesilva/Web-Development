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
    $username = $_POST["username"];
    $rawPassword = $_POST["password"];

    $password = password_hash($rawPassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Users (U_Name, U_Password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Signup successful");</script>';
    } else {
        echo '<script>alert("Error: ' . $conn->error . '");</script>';
    }
}

$conn->close();
?>
