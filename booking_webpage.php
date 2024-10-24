<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["busType"] = $_POST["busType"];
    $_SESSION["departingFrom"] = $_POST["departingFrom"];
    $_SESSION["arrivingAt"] = $_POST["arrivingAt"];
    $_SESSION["numberOfTickets"] = $_POST["numberOfTickets"];
    
    setcookie("username", $_POST["name"], time() + (86400 * 30), "/"); 
    print_r($_SESSION);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Tickets Booking</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bus-icon {
            width: 50px; 
            height: 50px; 
            margin-right: 10px;
        }
        .travelling-aid {
            font-size: 2em; 
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
             <img src="bus icon.webp" alt="Bus Icon" class="bus-icon">
             <span class="text-white">Travelling Aid</span>
        
            <h1 class="text-white">Busses Connecting Throughout Sri Lanka</h1>
        </div>
    </header>

    <div class="container mt-4">
        <form action="process_reservation.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="text" class="form-control" id="date" name="date" placeholder="DD/MM/YYYY">
            </div>
            <div class="form-group">
                <label for="busType">Bus Type</label>
                <select class="form-control" id="busType" name="busType">
                    <option value="highway">Highway</option>
                    <option value="AC">A/C</option>
                    <option value="normal">Normal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="departingFrom">Departing From</label>
                <select class="form-control" id="departingFrom" name="departingFrom">
                    <option value="Galle">Galle</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Matara">Matara</option>
                    <option value="Kalutara">Kalutara</option>
                </select>
            </div>
            <div class="form-group">
                <label for="arrivingAt">Arriving At</label>
                <select class="form-control" id="arrivingAt" name="arrivingAt">
                    <option value="Galle">Galle</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Matara">Matara</option>
                    <option value="Kalutara">Kalutara</option>
                </select>
            </div>
            <div class="form-group">
                <label for="numberOfTickets">Number of Tickets</label>
                <select class="form-control" id="numberOfTickets" name="numberOfTickets">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Reserve Tickets</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
