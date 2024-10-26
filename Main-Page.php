<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 170vh;
            background: linear-gradient(90deg, rgba(2,0,.6,1)0%, rgba(9,9,121, 1)35%, rgba(0,212,255,1)100%);
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
            border-radius: 50px;
            top: 120%;
            left: 15%;
            animation: animate 10s linear infinite;
        }
        .box div:nth-child(2){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 120%;
            left: 80%;
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
        .box div:nth-child(6){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: white;
            border-radius: 50px;
            top: 67%;
            left: 10%;
            animation: animate 15s linear infinite;
        }
        .box div:nth-child(5){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color: black;
            border-radius: 50px;
            top: 80%;
            left: 70%;
            animation: animate 8s linear infinite;
        }
        .box div:nth-child(7){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 60%;
            left: 80%;
            animation: animate 9s linear infinite;
        }
        .box div:nth-child(8){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-radius: 50px;
            top: 32%;
            left: 25%;
            animation: animate 16s linear infinite;
        }
        .box div:nth-child(9){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-radius: 50px;
            top: 90%;
            left: 25%;
            animation: animate 9s linear infinite;
        }
        .box div:nth-child(10){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 20%;
            left: 80%;
            animation: animate 5s linear infinite;
        }
        .box div:nth-child(11){
            box-shadow: 0 0 50px rgb(255, 240, 32);
            border-color:black;
            border-radius: 50px;
            top: 35%;
            left: 70%;
            animation: animate 10s linear infinite;
        }
        @keyframes animate {
        0%{
            transform: scale(0) translateY(0) rotate(0);
            opacity: 1;
        }
        100%{
            transform: scale(.5) translateY(0px) rotate(360deg);
            opacity: 1;
        }
        }
        .container {
            width: 90%;
            max-width: 400px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 17px rgb(255, 158, 32);
            background: linear-gradient(90deg, rgba(0, 255, 255, 1) 0%, rgba(0, 128, 128, 1) 100%);
            padding: 20px;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .wrapper {
            width: 400px;
            padding: 10px;
            margin-left: center;
            margin-top: 5px;
            border-radius: 10px;
            box-sizing: border-box;
            box-shadow: 0 0 17px rgb(255, 158, 32);
            background: linear-gradient(90deg, rgba(0, 128, 128, 1) 0%, rgba(0, 255, 255, 1) 100%);
            text-align: center;
            align-items: center;
            color: black;
        }
        h2 {
            text-align: center;
            color: #666;
        }
        p {
            text-align: center;
        }
        .form-links {
            margin: 20px 0;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        .form-link {
            display: block;
            padding: 15px;
            border: 2px solid #ccc;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            color: #333;
            transition: border-color 0.3s ease, color 0.3s ease;
        }
        .form-link:hover {
            background-color: #7fb9b6;
            color: #bd4888;
            box-shadow: 0 0 17px rgb(255, 158, 32);
        }
        .footer {
            text-align: center;
            margin-top: auto;
            font-size: 0.8em;
            padding: 10px;
        }
    </style>
</head>
<body>
        
        <div class="wrapper"
        <h3><strong>Student Information</strong></h3>
        <p><strong>Name:</strong> Jesh Hydrich A. Taganile</p>
        <p><strong>Course/Yr/Section:</strong> BSIS 3-A</p>
        </div>
        <d class="container">
        <h2><strong>TASKS</strong></h2>
        <div class="form-links">
            <ul>
                <li><a href="Curriculum-Vitae.php" class="form-link">1. Curriculum Vitae</a></li>
                <li><a href="Variables.php" class="form-link">2. The Use of Variables</a></li>
                <li><a href="Manipulating-Numbers.php" class="form-link">3. Manipulating Numbers</a></li>
                <li><a href="Math-Function.php" class="form-link">4. Using Math Functions</a></li>
                <li><a href="Constant.php" class="form-link">5. Using Constants</a></li>
                <li><a href="Selection-Statement.php" class="form-link">6. Selection Statements</a></li>
                <li><a href="Loop-Statement.php" class="form-link">7. Loop Statements</a></li>
                <li><a href="User-Define.php" class="form-link">8. User-defined Functions</a></li>
                <li><a href="Single-Dimensional-Array.php" class="form-link">9. Single-dimensional Array</a></li>
                <li><a href="Two-Dimensional-Array.php" class="form-link">10. Two-dimensional Array</a></li>
            </ul>
        </div>
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
