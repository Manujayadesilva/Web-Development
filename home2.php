<?php
session_start();

if(isset($_SESSION['cookie_consent']) && $_SESSION['cookie_consent'] === true) {
    if(isset($_SESSION['username'])) {
        $loggedInUser = $_SESSION['username'];
    } else {
        $loggedInUser = false;
    }
} else {
    $showCookieConsent = true;
}

function setCookieForUser($username) {
    $cookie_name = "user";
    $cookie_value = $username;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
}

function handleCookieConsent() {
    $_SESSION['cookie_consent'] = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traveling Aid</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden; 
            overflow-y: auto; 
        }
        .content {
            text-align: center;
            padding-top: 100px; 
        }
        h1, h2 ,h5 {
            color: #000; 
            text-shadow: 2px 2px 4px #fff; 
        }
       h1 {
           font-size: 7em; 
           font-weight: bold;
           font-family: "Garamond", sans-serif; 
        }
        h2 {
            font-size: 2em;
            font-weight: bold;
        }
        .footer {
            background-color: #333; 
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .bus-details {
            background-color: #fff;
            padding: 20px;
            margin-top: 50px;
        }
        .bus-details img {
            max-width: 100%;
            height: auto;
        }
        .navbar-nav {
            width: 100%;
            justify-content: space-between;
        }
        .navbar-nav .nav-item {
            flex-grow: 10;
            font-weight: bold;
            text-align: center;
            font-size: 18px; 
        }

        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-sign-in" href="login.html">Sign In</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-sign-up" href="Register.html">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link admin-login" href="page.html">Admin Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div style="background-color: #d3d3d3;">
    <h1><center>Welcome to Travelling Aid</center></h1>
</div><br>
    

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="content">
                <img src="silver-tourist-bus-modern-big-vehicle-generate-ai_98402-22028.jpg" alt="Bus Image" style="max-width: 100%;">
            </div>
        </div>
        <div class="col-md-6">
            <div class="content">
                <h2>Convenience in Booking</h2><br><br>
                <h5> We prioritize convenience by offering a user-friendly interface that simplifies the booking experience. Our intuitive design allows travelers to easily navigate through different bus options, view detailed schedules, and select seats based on their preferences. With secure payment options and instant confirmation, travelers can make hassle-free bookings from the comfort of their homes or on the go, making their travel arrangements stress-free and efficient.</h5><br>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="content">
                <h2>Ease of Accessing Information</h2><br><br>
                <h5>Our website provides comprehensive information about bus services, including timetables, routes, and fares, making it effortless for anyone to access the details they need. Whether users are planning their trips in advance or seeking last-minute information, our platform offers real-time updates and accurate data, ensuring that travelers are well-informed at every step of their journey.</h5><br>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content">
                <img src="depositphotos_179441880-stock-photo-white-bus-driving-on-road.jpg" alt="Bus Image" style="max-width: 100%;">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="content">
                <img src="clock-street-morning-time.jpg" alt="Bus Image" style="max-width: 100%;"><br><br><br>
            </div>
        </div>
        <div class="col-md-6">
            <div class="content">
                <h2>Saving Time</h2><br><br>
                <h5>Our website is tailored to save precious time for travelers by providing a streamlined booking process. With just a few clicks, users can swiftly browse through available bus options, select their preferred routes, and confirm their bookings in a matter of minutes. By eliminating the need for lengthy phone calls or in-person visits to booking counters, our platform ensures that travelers can efficiently plan their journeys without unnecessary delays.</h5><br><br>
            </div>
        </div>
    </div>
</div>


 <section class="bus-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Experience effortless nationwide travel with our platform, where easy</h2>
                <h2><center>travel systems redefine the future.</center></h2><br><br>


                <h5>"Convenient touring throughout the nation is not just a promise but a reality with our innovative platform. Easy traveling systems are the future, and we're at the forefront of this revolution. Our website provides a seamless experience that resonates with the modern traveler, offering intuitive features that simplify the entire journey planning process. From browsing bus routes to booking tickets with ease, our platform empowers travelers to explore the nation effortlessly. With convenience as our cornerstone, we're redefining the way people travel, one click at a time."</h5><br><br>

                <img src="star-city-bus-stop-4k_1618130550.jpg.webp" alt="Bus Image">
                <br>
                
            </div>
        </div>
    </div>
</section>


 <section class="bus-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">


                <h5>At the heart of our platform lies a commitment to customer satisfaction and convenience. We understand the intricacies of travel and strive to anticipate and address every need along the way. From responsive customer support to innovative technological solutions, we're dedicated to ensuring that every journey is not just convenient but also enjoyable. By continuously refining our services and embracing new advancements, we aim to set the standard for effortless travel experiences. Join us on our mission to redefine the travel landscape and unlock a world of possibilities with just a click.</h5><br><br>

                <center><img src="bus icon.webp" alt="Bus Image"></center>
                <br><br>
                <h2><center>Mind Your Path ..Save Your Time..</center></h2>
            </div>
        </div>
    </div>
</section>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <a class="btn btn-primary btn-lg btn-block" href="login.html"><h2>Get Started</h2></a> 
                <br><br><br><br><br>
            </div>
        </div>
    </div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h4>About Us</h4>
                        <p>we're dedicated to revolutionizing the way Sri Lankans travel by bus. As a pioneering platform, we're committed to providing seamless and convenient bus booking solutions tailored to meet the diverse needs of travelers across the island.</p>
                    </div>
                    <div class="col-md-6">
                        <h4>Contact Us</h4>
                        <p>Email: TravellingAid@.com</p>
                        <p>Location: 123 Street,Galle City, SriLanka</p>
                        <p>Phone: +1234567890</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Affiliate Program</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h4>Get Help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min
