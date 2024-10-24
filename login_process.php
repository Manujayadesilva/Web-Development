<?php
$servername = "localhost:8889";
$username = "dseuser";
$password = "123";
$dbname = "bus_booking_system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST["username"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);

    $sql = "SELECT * FROM Users WHERE U_Name = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["U_Password"])) {
            header("Location: bus_ticket_booking copy.html");
            exit(); 
        } else {
            echo "Invalid password";
        }
    } else {
        echo "User not found";
    }
}


?>
