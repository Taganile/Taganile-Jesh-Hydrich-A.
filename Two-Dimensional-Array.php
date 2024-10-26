<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
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
    <h1>Two-dimensional Array Operations</h1>

    <?php
    $N = 5;

    $array = array();
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $array[$i][$j] = rand(1, 100);
        }
    }

    echo "<h2>Array</h2>";
    display_array($array);

    calculate_row_column_sums_averages_min_max($array);
    calculate_diagonal_sums_and_averages($array);
    calculate_overall_statistics($array);

    function display_array($array) {
        echo "<table>";
        foreach ($array as $row) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>{$value}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function calculate_row_column_sums_averages_min_max($array) {
        $N = count($array);
        
        echo "<h2>Row and Column Sums, Averages, Min and Max</h2>";

        for ($i = 0; $i < $N; $i++) {
            $rowSum = 0;
            $rowMin = PHP_INT_MAX;
            $rowMax = PHP_INT_MIN;
            for ($j = 0; $j < $N; $j++) {
                $rowSum += $array[$i][$j];
                if ($array[$i][$j] < $rowMin) {
                    $rowMin = $array[$i][$j];
                }
                if ($array[$i][$j] > $rowMax) {
                    $rowMax = $array[$i][$j];
                }
            }
            $rowAvg = $rowSum / $N;
            echo "Row $i: Sum = $rowSum, Average = $rowAvg, Min = $rowMin, Max = $rowMax<br><br>";
        }

        for ($j = 0; $j < $N; $j++) {
            $colSum = 0;
            $colMin = PHP_INT_MAX;
            $colMax = PHP_INT_MIN;
            for ($i = 0; $i < $N; $i++) {
                $colSum += $array[$i][$j];
                if ($array[$i][$j] < $colMin) {
                    $colMin = $array[$i][$j];
                }
                if ($array[$i][$j] > $colMax) {
                    $colMax = $array[$i][$j];
                }
            }
            $colAvg = $colSum / $N;
            echo "Column $j: Sum = $colSum, Average = $colAvg, Min = $colMin, Max = $colMax<br><br>";
        }
    }

    function calculate_diagonal_sums_and_averages($array) {
        $N = count($array);
        $mainDiagonalSum = 0;
        $secondaryDiagonalSum = 0;

        for ($i = 0; $i < $N; $i++) {
            $mainDiagonalSum += $array[$i][$i];
            $secondaryDiagonalSum += $array[$i][$N - 1 - $i];
        }

        $mainDiagonalAvg = $mainDiagonalSum / $N;
        $secondaryDiagonalAvg = $secondaryDiagonalSum / $N;

        echo "<h2>Diagonal Sums and Averages</h2>";
        echo "Main Diagonal: Sum = $mainDiagonalSum, Average = $mainDiagonalAvg<br><br>";
        echo "Secondary Diagonal: Sum = $secondaryDiagonalSum, Average = $secondaryDiagonalAvg<br>";
    }

    function calculate_overall_statistics($array) {
        $overallSum = 0;
        $overallCount = 0;
        $overallMin = PHP_INT_MAX;
        $overallMax = PHP_INT_MIN;

        foreach ($array as $row) {
            foreach ($row as $value) {
                $overallSum += $value;
                $overallCount++;
                if ($value < $overallMin) {
                    $overallMin = $value;
                }
                if ($value > $overallMax) {
                    $overallMax = $value;
                }
            }
        }

        $overallAvg = $overallSum / $overallCount;

        echo "<h2>Overall Statistics</h2>";
        echo "Sum = $overallSum, Average = $overallAvg<br><br>";
        echo "Smallest Number = $overallMin, Largest Number = $overallMax<br>";
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
