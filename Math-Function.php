<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
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

        h1, h2 {
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
    <h1>Using Math Functions</h1>

    <?php
    $float1 = 12.35;
    $float2 = 45.67;
    $float3 = 89.45;
    $float4 = 23.99;
    $float5 = 78.12;

    $int1 = 10;
    $int2 = 25;
    $int3 = 50;
    $int4 = 75;
    $int5 = 100;

    echo "<h2>Floating Point Numbers:</h2>";
    echo "<p>$float1 <br>  $float2 <br>  $float3 <br>  $float4 <br>  $float5</p>";

    echo "<h2>Whole Numbers:</h2>";
    echo "<p>$int1 <br> $int2 <br> $int3 <br> $int4 <br> $int5</p>";

    echo "<h2>Math Functions Results:</h2>";

    echo "<p>Absolute value of -$int1: " . abs(-$int1) . "</p>";
    echo "<p>Square root of $int2: " . sqrt($int2) . "</p>";
    echo "<p>$int3 raised to the power of 3: " . pow($int3, 3) . "</p>";
    echo "<p>Rounded value of $float1: " . round($float1) . "</p>";
    echo "<p>Ceiling of $float2: " . ceil($float2) . "</p>";
    echo "<p>Floor of $float3: " . floor($float3) . "</p>";
    echo "<p>Maximum of $int1, $int2, and $int3: " . max($int1, $int2, $int3) . "</p>";
    echo "<p>Minimum of $int4, $int5, and $int3: " . min($int4, $int5, $int3) . "</p>";
    echo "<p>Natural log of $float4: " . log($float4) . "</p>";
    echo "<p>Base-10 log of $float5: " . log10($float5) . "</p>";
    echo "<p>Sine of $int1 radians: " . sin($int1) . "</p>";
    echo "<p>Cosine of $int2 radians: " . cos($int2) . "</p>";
    echo "<p>Tangent of $int3 radians: " . tan($int3) . "</p>";
    echo "<p>Exponential of $int1: " . exp($int1) . "</p>";
    echo "<p>$int5 modulus $int2: " . ($int5 % $int2) . "</p>";

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
