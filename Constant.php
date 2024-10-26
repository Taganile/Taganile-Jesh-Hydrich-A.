<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants</title>
    <style>
        body {
            background: linear-gradient(90deg, rgba(2,0,.6,1)0%, rgba(9,9,121, 1)35%, rgba(0,212,255,1)100%);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 70%;
            margin: 20px auto;
            padding: 20px;
            background-color: #d8d2d2a8;
            border-radius: 8px;
            box-shadow: 0 0 15px rgb(255, 158, 32);
        }

        .box div {
            position: absolute;
            width: 60px;
            height: 60px;
            background-color: transparent;
            border: 6px solid rgba(255,255,255,0.8);
        }
        .box div:nth-child(1){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 70%;
            left: 87%;
            animation: animate 10s linear infinite;
        }
        .box div:nth-child(2){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 120%;
            left: 90%;
            animation: animate 7s linear infinite;
        }
        .box div:nth-child(3){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: white;
            border-radius: 50px;
            top: 17%;
            left: 6%;
            animation: animate 9s linear infinite;
        }
        .box div:nth-child(4){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: white;
            border-radius: 50px;
            top: 139%;
            left: 7%;
            animation: animate 9s linear infinite;
        }
        .box div:nth-child(5){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: white;
            border-radius: 50px;
            top: 67%;
            left: 8%;
            animation: animate 5s linear infinite;
        }
        .box div:nth-child(6){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 30%;
            left: 90%;
            animation: animate 5s linear infinite;
        }
        .box div:nth-child(7){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 95%;
            left: 85%;
            animation: animate 15s linear infinite;
        }
        .box div:nth-child(8){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: white;
            border-radius: 50px;
            top: 35%;
            left: 4%;
            animation: animate 4s linear infinite;
        }
        .box div:nth-child(9){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: white;
            border-radius: 50px;
            top: 110%;
            left: 3%;
            animation: animate 4s linear infinite;
        }
        .box div:nth-child(10){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: white;
            border-radius: 50px;
            top: 85%;
            left: 2%;
            animation: animate 10s linear infinite;
        }
        @keyframes animate {
        0%{
            transform: scale(0) translateY(0) rotate(0);
            opacity: 1;
        }
        100%{
            transform: scale(.4) translateY(-90px) rotate(360deg);
            opacity: 1;
        }
        }

        h1{
            color:#333;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 16px;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 0.8em;
        }
        .back-link {
            margin-top: 20px;
            display: block;
            text-align: center;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Using Constants</h1>

    <?php
    define("PI", 3.141592653589793);
    define("GRAVITY", 9.81);
    define("LIGHT_SPEED", 299792458);
    define("AVOGADRO", 6.02214076e23);
    define("PLANCK", 6.62607015e-34);
    define("EARTH_RADIUS", 6371);
    define("GOLDEN_RATIO", 1.61803398875);
    define("ABSOLUTE_ZERO", -273.15);
    define("EULER_NUMBER", 2.71828);
    define("BOHR_RADIUS", 5.29177210903e-11);

    echo "<h2>Scientific Constants:</h2>";

    echo "<p><strong>PI:</strong> " . PI . " - Used to calculate the circumference and area of a circle. <br> Example: circumference = 2 * PI * radius.</p>";
    echo "<p><strong>GRAVITY:</strong> " . GRAVITY . " m/s² - The acceleration due to gravity on Earth. <br> Example: weight = mass * GRAVITY.</p>";
    echo "<p><strong>LIGHT_SPEED:</strong> " . LIGHT_SPEED . " m/s - The speed of light in a vacuum. <br> Example: time to travel 1 km = 1000 / LIGHT_SPEED.</p>";
    echo "<p><strong>AVOGADRO:</strong> " . AVOGADRO . " mol⁻¹ - The number of particles in one mole of a substance. <br> Example: number of molecules = AVOGADRO * moles.</p>";
    echo "<p><strong>PLANCK:</strong> " . PLANCK . " J·s - Planck's constant used in quantum mechanics. <br> Example: energy = PLANCK * frequency.</p>";

    echo "<h2>Mathematical and Physical Constants:</h2>";

    echo "<p><strong>EARTH_RADIUS:</strong> " . EARTH_RADIUS . " km - The average radius of the Earth. <br> Example: circumference = 2 * PI * EARTH_RADIUS.</p>";
    echo "<p><strong>GOLDEN_RATIO:</strong> " . GOLDEN_RATIO . " - A unique ratio often found in nature and art. <br> Example: length = width * GOLDEN_RATIO.</p>";
    echo "<p><strong>ABSOLUTE_ZERO:</strong> " . ABSOLUTE_ZERO . " °C - The lowest possible temperature. <br> Example: temperature difference = current temp - ABSOLUTE_ZERO.</p>";
    echo "<p><strong>EULER_NUMBER:</strong> " . EULER_NUMBER . " - The base of natural logarithms. <br> Example: growth = EULER_NUMBER ^ time.</p>";
    echo "<p><strong>BOHR_RADIUS:</strong> " . BOHR_RADIUS . " m - The average distance between the nucleus and the electron in a hydrogen atom. <br> Example: distance between particles = BOHR_RADIUS.</p>";
    ?>

    <a class="back-link" href="Main-Page.php">Back to Main Page</a>
</div>
<div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>

<div class="footer">
    <p>Created by Jesh Hydrich A. Taganile <br>Date: <?php echo date('F d, Y'); ?></p>
</div>

</body>
</html>
