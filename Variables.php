<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables</title>
    <style>
        body {
            background: linear-gradient(90deg, rgba(2,0,.6,1)0%, rgba(9,9,121, 1)35%, rgba(0,212,255,1)100%);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 60%;
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
        h1 {
            text-align: center;
            color: #333;
        }
        p, li {
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
        <h1>The Use of Variables</h1>

        <?php
            $item1_quantity = 10;
            $item2_quantity = 20;
            $item3_quantity = 30;
            $item4_quantity = 40;
            $item5_quantity = 50;

            $item1_price = 10.99;
            $item2_price = 20.49;
            $item3_price = 30.75;
            $item4_price = 40.00;
            $item5_price = 55.25;

            $item1_description = "Laptop";
            $item2_description = "Smartphone";
            $item3_description = "Tablet";
            $item4_description = "Headphones";
            $item5_description = "Smartwatch";

            $item1_code = 'A';
            $item2_code = 'B';
            $item3_code = 'C';
            $item4_code = 'D';
            $item5_code = 'E';

            echo "<h2>Product Quantities (Whole Numbers):</h2>";
            echo "<p>Laptop quantity: $item1_quantity</p>";
            echo "<p>Smartphone quantity: $item2_quantity</p>";
            echo "<p>Tablet quantity: $item3_quantity</p>";
            echo "<p>Headphones quantity: $item4_quantity</p>";
            echo "<p>Smartwatch quantity: $item5_quantity</p>";

            echo "<h2>Product Prices (Floating Point Numbers):</h2>";
            echo "<p>Laptop price: $$item1_price</p>";
            echo "<p>Smartphone price: $$item2_price</p>";
            echo "<p>Tablet price: $$item3_price</p>";
            echo "<p>Headphones price: $$item4_price</p>";
            echo "<p>Smartwatch price: $$item5_price</p>";

            echo "<h2>Product Descriptions (Strings):</h2>";
            echo "<p>Item 1: $item1_description</p>";
            echo "<p>Item 2: $item2_description</p>";
            echo "<p>Item 3: $item3_description</p>";
            echo "<p>Item 4: $item4_description</p>";
            echo "<p>Item 5: $item5_description</p>";

            echo "<h2>Product Codes (Characters):</h2>";
            echo "<p>Item 1 code: $item1_code</p>";
            echo "<p>Item 2 code: $item2_code</p>";
            echo "<p>Item 3 code: $item3_code</p>";
            echo "<p>Item 4 code: $item4_code</p>";
            echo "<p>Item 5 code: $item5_code</p>";
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
