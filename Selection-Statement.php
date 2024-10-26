<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
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
            color: #333;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        p {
            font-size: 16px;
        }
        ul {
            list-style-type: none;
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
    <h1>Selection Statements</h1>

    <?php
    $strings = array("Banana", "Apple", "Mango", "Peach", "Cherry");

    $numbers = array(10, 5, 8, 12, 4);

    echo "<h2>Original Strings:</h2>";
    echo "<ul>";
    foreach ($strings as $str) {
        echo "<li>$str</li>";
    }
    echo "</ul>";

    echo "<h2>Original Numbers:</h2>";
    echo "<ul>";
    foreach ($numbers as $num) {
        echo "<li>$num</li>";
    }
    echo "</ul>";

    function sort_ascending(&$array) {
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = 0; $j < count($array) - 1 - $i; $j++) {
                if ($array[$j] > $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
    }

    function sort_descending(&$array) {
        for ($i = 0; $i < count($array) - 1; $i++) {
            for ($j = 0; $j < count($array) - 1 - $i; $j++) {
                if ($array[$j] < $array[$j + 1]) {
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
    }

    $strings_asc = $strings;
    sort_ascending($strings_asc);

    echo "<h2>Strings in Ascending Order:</h2>";
    echo "<ul>";
    foreach ($strings_asc as $str) {
        echo "<li>$str</li>";
    }
    echo "</ul>";

    $strings_desc = $strings;
    sort_descending($strings_desc);

    echo "<h2>Strings in Descending Order:</h2>";
    echo "<ul>";
    foreach ($strings_desc as $str) {
        echo "<li>$str</li>";
    }
    echo "</ul>";

    if ($numbers[0] % $numbers[4] == 0) {
        $sum = array_sum($numbers);
        $product = array_product($numbers);
        $average = $sum / count($numbers);

        echo "<h2>Sum, Product, and Average:</h2>";
        echo "<p>Sum: $sum</p>";
        echo "<p>Product: $product</p>";
        echo "<p>Average: " . round($average, 2) . "</p>";
    } else {
        $numbers_asc = $numbers;
        sort_ascending($numbers_asc);

        echo "<h2>Numbers in Ascending Order:</h2>";
        echo "<ul>";
        foreach ($numbers_asc as $num) {
            echo "<li>$num</li>";
        }
        echo "</ul>";
    }
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
