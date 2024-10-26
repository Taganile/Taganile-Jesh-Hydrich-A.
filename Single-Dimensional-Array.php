<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-dimensional Array</title>
    <style>
        body {
            background: linear-gradient(90deg, rgba(2,0,.6,1)0%, rgba(9,9,121, 1)35%, rgba(0,212,255,1)100%);
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
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
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
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
    <h1>Parallel Array Sorting by Name</h1>

    <?php
    $names = array("John", "Alice", "David", "Sophia", "Chris", "Ben", "Emily", "Grace", "Mike", "Lucy");
    $ages = array(25, 22, 30, 24, 28, 26, 23, 27, 31, 29);
    $sex = array("Male", "Female", "Male", "Female", "Male", "Male", "Female", "Female", "Male", "Female");
    $nationalities = array("American", "Canadian", "British", "Australian", "New Zealander", "Irish", "German", "French", "Italian", "Spanish");

    echo "<h2>Unsorted List</h2>";
    display_table($names, $ages, $sex, $nationalities);

    custom_sort_by_name($names, $ages, $sex, $nationalities);

    echo "<h2>Sorted List (by Name)</h2>";
    display_table($names, $ages, $sex, $nationalities);

    function display_table($names, $ages, $sex, $nationalities) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Age</th><th>Sex</th><th>Nationality</th></tr>";
        for ($i = 0; $i < count($names); $i++) {
            echo "<tr><td>{$names[$i]}</td><td>{$ages[$i]}</td><td>{$sex[$i]}</td><td>{$nationalities[$i]}</td></tr>";
        }
        echo "</table>";
    }

    function custom_sort_by_name(&$names, &$ages, &$sex, &$nationalities) {
        for ($i = 0; $i < count($names) - 1; $i++) {
            for ($j = $i + 1; $j < count($names); $j++) {
                if ($names[$i] > $names[$j]) {
                    $temp_name = $names[$i];
                    $names[$i] = $names[$j];
                    $names[$j] = $temp_name;

                    $temp_age = $ages[$i];
                    $ages[$i] = $ages[$j];
                    $ages[$j] = $temp_age;

                    $temp_sex = $sex[$i];
                    $sex[$i] = $sex[$j];
                    $sex[$j] = $temp_sex;

                    $temp_nationality = $nationalities[$i];
                    $nationalities[$i] = $nationalities[$j];
                    $nationalities[$j] = $temp_nationality;
                }
            }
        }
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
