<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Functions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: linear-gradient(90deg, rgba(2,0,.6,1)0%, rgba(9,9,121, 1)35%, rgba(0,212,255,1)100%);
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
        .problem, .explanation {
            margin-bottom: 20px;
        }
        .problem p, .explanation p {
            line-height: 1.6;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>User-defined Functions: Basic Arithmetic Operations & Statistical Calculations</h1>

    <div class="problem">
        <h2>Problem Description</h2>
        <p>The selected problem involves performing basic arithmetic operations and statistical calculations on an array of 10 numbers. We will compute the sum, average, maximum and minimum values, and count how many numbers are even or odd. Additionally, we'll find numbers greater or less than certain thresholds, multiply all numbers by a factor, and check if all numbers are positive.</p>
    </div>

    <div class="explanation">
        <h2>Functions Created and Explanation</h2>
        <p><strong>1. calculate_sum()</strong>: This function calculates the total sum of all the numbers in the array by iterating through the array elements and adding each number to a cumulative sum.</p>
        <p><strong>2. calculate_average()</strong>: This function computes the average of the numbers by first calculating the sum using <em>calculate_sum()</em> and dividing it by the total count of the array elements.</p>
        <p><strong>3. find_max()</strong>: This function finds the largest number in the array by comparing each element with the current maximum value and updating it accordingly.</p>
        <p><strong>4. find_min()</strong>: Similar to <em>find_max()</em>, this function finds the smallest number in the array by comparing each element with the current minimum value.</p>
        <p><strong>5. count_even()</strong>: This function counts how many numbers in the array are even by checking if each number is divisible by 2.</p>
        <p><strong>6. count_odd()</strong>: This function counts how many numbers in the array are odd by checking if each number is not divisible by 2.</p>
        <p><strong>7. numbers_greater_than()</strong>: This function finds all numbers in the array that are greater than a specified threshold value, returning an array of those numbers.</p>
        <p><strong>8. numbers_less_than()</strong>: Similar to <em>numbers_greater_than()</em>, this function finds all numbers less than a specified threshold value.</p>
        <p><strong>9. multiply_by_factor()</strong>: This function multiplies each number in the array by a given factor, returning a new array with the multiplied values.</p>
        <p><strong>10. all_positive()</strong>: This function checks if all numbers in the array are positive by ensuring that no number is less than or equal to zero.</p>
    </div>

    <?php
    $numbers = array(15, 8, 23, 42, 7, 16, 30, 4, 22, 11);

    function calculate_sum($arr) {
        $sum = 0;
        foreach ($arr as $num) {
            $sum += $num;
        }
        return $sum;
    }

    function calculate_average($arr) {
        $sum = calculate_sum($arr);
        return $sum / count($arr);
    }

    function find_max($arr) {
        $max = $arr[0];
        foreach ($arr as $num) {
            if ($num > $max) {
                $max = $num;
            }
        }
        return $max;
    }

    function find_min($arr) {
        $min = $arr[0];
        foreach ($arr as $num) {
            if ($num < $min) {
                $min = $num;
            }
        }
        return $min;
    }

    function count_even($arr) {
        $count = 0;
        foreach ($arr as $num) {
            if ($num % 2 == 0) {
                $count++;
            }
        }
        return $count;
    }

    function count_odd($arr) {
        $count = 0;
        foreach ($arr as $num) {
            if ($num % 2 != 0) {
                $count++;
            }
        }
        return $count;
    }

    function numbers_greater_than($arr, $threshold) {
        $greater = array();
        foreach ($arr as $num) {
            if ($num > $threshold) {
                $greater[] = $num;
            }
        }
        return $greater;
    }

    function numbers_less_than($arr, $threshold) {
        $lesser = array();
        foreach ($arr as $num) {
            if ($num < $threshold) {
                $lesser[] = $num;
            }
        }
        return $lesser;
    }

    function multiply_by_factor($arr, $factor) {
        $multiplied = array();
        foreach ($arr as $num) {
            $multiplied[] = $num * $factor;
        }
        return $multiplied;
    }

    function all_positive($arr) {
        foreach ($arr as $num) {
            if ($num <= 0) {
                return false;
            }
        }
        return true;
    }

    echo "<h2>Array of Numbers</h2>";
    echo "<p>" . implode(", ", $numbers) . "</p>";

    echo "<h2>Sum of Numbers</h2>";
    echo "<p>" . calculate_sum($numbers) . "</p>";

    echo "<h2>Average of Numbers</h2>";
    echo "<p>" . calculate_average($numbers) . "</p>";

    echo "<h2>Maximum Value</h2>";
    echo "<p>" . find_max($numbers) . "</p>";

    echo "<h2>Minimum Value</h2>";
    echo "<p>" . find_min($numbers) . "</p>";

    echo "<h2>Count of Even Numbers</h2>";
    echo "<p>" . count_even($numbers) . "</p>";

    echo "<h2>Count of Odd Numbers</h2>";
    echo "<p>" . count_odd($numbers) . "</p>";

    echo "<h2>Numbers Greater than 20</h2>";
    $greater_than_20 = numbers_greater_than($numbers, 20);
    echo "<p>" . implode(", ", $greater_than_20) . "</p>";

    echo "<h2>Numbers Less than 10</h2>";
    $less_than_10 = numbers_less_than($numbers, 10);
    echo "<p>" . implode(", ", $less_than_10) . "</p>";

    echo "<h2>Numbers Multiplied by 2</h2>";
    $multiplied_by_2 = multiply_by_factor($numbers, 2);
    echo "<p>" . implode(", ", $multiplied_by_2) . "</p>";

    echo "<h2>All Numbers Positive?</h2>";
    echo "<p>" . (all_positive($numbers) ? "Yes" : "No") . "</p>";
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
