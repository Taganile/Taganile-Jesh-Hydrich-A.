<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curriculum Vitae</title>
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
            box-shadow: 0 0 15px rgb(255, 158, 32);
            border-radius: 8px;
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

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        h1 {
            margin-top: 10px;
            font-size: 24px;
            color: #333;
        }

        .columns {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .left-column,
        .right-column {
            width: 48%;
        }

        h2 {
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 5px;
            margin-bottom: 15px;
            font-size: 18px;
        }

        p {
            font-size: 14px;
            color: #555;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .personal-info ul li strong {
            width: 120px;
            display: inline-block;
        }

        .back-link{
            text-align: center;
            margin-left: 400px;
            margin-top: 100px;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.8em;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="header">
            <img src="profile.jpg" alt="Profile Photo">
            <h1>Jesh Hydrich A. Taganile</h1>
            <p>Bachelor of Science in Information Systems</p>
        </div>

        <div class="columns">
            <div class="left-column">
                <h2>Personal Background</h2>
                <div class="personal-info">
                    <ul>
                        <li><strong>Age:</strong> 23</li>
                        <li><strong>Birthday:</strong> October 14, 2001</li>
                        <li><strong>Sex:</strong> Male</li>
                        <li><strong>Civil Status:</strong> Single</li>
                        <li><strong>Nationality:</strong> Filipino</li>
                        <li><strong>Address:</strong>Deca Homes 5, Basak, Lapu-Lapu City</li>
                    </ul>
                </div>
                <br><br>

                <h2>Job Objective</h2>
                <li>To obtain a challenging position in the field of Information Systems that will utilize my knowledge in web development, 
                    while offering opportunities for continuous professional growth.</li>
                
                <br><br>
                <h2>Educational Background</h2>
                <ul>
                    <li><strong>Cebu Technological University Main Campus</strong> <br>Bachelor of Science in Information System <br>Class 2026 </li>
                    <li><strong>Ville Academy Foundation Inc.</strong> <br>Senior High School Diploma <br>Class 2020 </li>
                    <li><strong>Marigondon National High School</strong><br>High School Diploma <br> Class 2018</li>
                    <li><strong>Marigondon Elementary School</strong> <br>Elementary Diploma <br> Class 2014</li>
                </ul>
            </div>

            <div class="right-column">
                <h2>Skills</h2>
                <ul>
                    <li>Proficient in Microsoft Excel and Word</li>
                    <li>Strong analytical skills</li>
                    <li>Basic knowledge of Java and CSS</li>
                </ul>
                <br><br>
                <h2>Projects</h2>
                <ul>
                    <li><strong>Health Care Automation Project</strong> <br> 
                    - Developed a system to help patient and staff efficiently. <br>
                    - Introducing a real-time, Online Scheduling Platform will allow patient to book, reschedule and cancel appointments with ease.
                </li>
                </ul>
                <br><br>
                <h2>Contact Information</h2>
                <li>Email: taganilejesh@gmail.com</li>
                <li>Phone: 0991-444-5848</li>
                <li>Address: Blk 14 Lot 14 Deca Homes 5, Basak, Lapu-Lapu City, Cebu, Philippines</li>
                <br><br>
                <h2>References</h2>
                    <li><strong>Mrs. Noreen Fuentes</strong> <br>Instructor, Cebu Technological University</li>
                    <li><strong>Mrs. Janeth Ugang</strong> <br>Instructor, Cebu Technological University</li>
            </div>          
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
            Created by Jesh Hydrich A. Taganile <br>Date: <?php echo date('F d, Y'); ?>
        </div>

</body>

</html>
