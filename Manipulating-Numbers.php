<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Computation</title>
    <style>
        body {
            background: linear-gradient(90deg, rgba(2,0,.6,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
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
        input {
            margin-bottom: 10px;
            padding: 5px;
            width: 200px;
        }
        .button-container {
            margin-top: 20px;
        }
        .button-container input {
            margin-right: 10px;
            padding: 10px 20px;
        }
        .back-link {
            margin-top: 20px;
            display: block;
            text-align: center;
            font-size: 16px;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            font-size: 0.8em;
        }
        #results {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Grade Computation</h1>

    <form id="gradeForm" method="POST" action="">
        <h2>Midterm Period</h2>
        <p>Enter your midterm quiz grades (comma-separated):</p>
        <input type="text" name="midterm_quizzes" required>
        
        <p>Enter your midterm project grades (comma-separated):</p>
        <input type="text" name="midterm_projects" required>
        
        <p>Enter your midterm exam grade:</p>
        <input type="number" name="midterm_exam" required>

        <h2>Final Period</h2>
        <p>Enter your final quiz grades (comma-separated):</p>
        <input type="text" name="final_quizzes" required>
        
        <p>Enter your final project grades (comma-separated):</p>
        <input type="text" name="final_projects" required>
        
        <p>Enter your final exam grade:</p>
        <input type="number" name="final_exam" required>

        <div class="button-container">
            <input type="submit" value="Calculate Grades">
            <input type="reset" value="Reset" onclick="clearResults()"> <!-- Reset button with JS to clear results -->
        </div>
    </form>

    <div id="results">
    <?php
    function calculate_average($grades) {
        $grades = explode(',', $grades);
        $sum = 0;
        $count = 0;
        
        foreach ($grades as $grade) {
            $sum += floatval($grade);
            $count++;
        }
        
        return $count > 0 ? $sum / $count : 0;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $midterm_quizzes = $_POST['midterm_quizzes'];
        $midterm_projects = $_POST['midterm_projects'];
        $midterm_exam = floatval($_POST['midterm_exam']);
        
        $midterm_quiz_average = calculate_average($midterm_quizzes);
        $midterm_project_average = calculate_average($midterm_projects);
        $midterm_grade = ($midterm_quiz_average * 0.30) + ($midterm_project_average * 0.20) + ($midterm_exam * 0.50);

        $final_quizzes = $_POST['final_quizzes'];
        $final_projects = $_POST['final_projects'];
        $final_exam = floatval($_POST['final_exam']);
        
        $final_quiz_average = calculate_average($final_quizzes);
        $final_project_average = calculate_average($final_projects);
        $tentative_final_grade = ($final_quiz_average * 0.30) + ($final_project_average * 0.20) + ($final_exam * 0.50);

        $final_final_grade = ($midterm_grade + $tentative_final_grade) / 2;

        echo "<h2>Midterm Period</h2>";
        echo "<p>Average Quizzes: " . round($midterm_quiz_average, 2) . "</p>";
        echo "<p>Average Projects: " . round($midterm_project_average, 2) . "</p>";
        echo "<p>Midterm Exam: $midterm_exam</p>";
        echo "<p><strong>Midterm Grade: " . round($midterm_grade, 2) . "</strong></p>";

        echo "<h2>Final Period (Tentative Final)</h2>";
        echo "<p>Average Quizzes: " . round($final_quiz_average, 2) . "</p>";
        echo "<p>Average Projects: " . round($final_project_average, 2) . "</p>";
        echo "<p>Final Exam: $final_exam</p>";
        echo "<p><strong>Tentative Final Grade: " . round($tentative_final_grade, 2) . "</strong></p>";

        echo "<h2>Final-Final Grade</h2>";
        echo "<p><strong>Final-Final Grade: " . $final_final_grade, 2 . "</strong></p>";
    }
    ?>
    </div>

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

<script>
    function clearResults() {
        document.getElementById('results').innerHTML = '';
    }
</script>

</body>
</html>
