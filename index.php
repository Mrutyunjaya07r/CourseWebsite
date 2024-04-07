<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Course Website</title>
 <link rel="stylesheet" href="style.css">
</head>
<body style="background-image: linear-gradient(90deg, rgb(209, 209, 209),rgb(207, 207, 207)),linear-gradient(45deg, rgb(177, 223, 206) 0%, rgb(177, 223, 206) 46%,rgb(147, 192, 214) 46%, rgb(147, 192, 214) 56%,rgb(117, 162, 222) 56%, rgb(117, 162, 222) 61%,rgb(86, 131, 229) 61%, rgb(86, 131, 229) 64%,rgb(56, 101, 237) 64%, rgb(56, 101, 237) 82%,rgb(26, 70, 245) 82%, rgb(26, 70, 245) 100%),linear-gradient(135deg, rgb(177, 223, 206) 0%, rgb(177, 223, 206) 46%,rgb(147, 192, 214) 46%, rgb(147, 192, 214) 56%,rgb(117, 162, 222) 56%, rgb(117, 162, 222) 61%,rgb(86, 131, 229) 61%, rgb(86, 131, 229) 64%,rgb(56, 101, 237) 64%, rgb(56, 101, 237) 82%,rgb(26, 70, 245) 82%, rgb(26, 70, 245) 100%); background-blend-mode:overlay,overlay,normal;">
   
<h1 style="text-align:center;">Online Courses</h1>
    <h2 style="text-align:center;">Content of some Courses</h2>
    <?php
    include "db.php";?>
    <button class="b1"><a href="http://localhost/mini_project/displayregistarent.php" style="text-decoration:none; text-align:center;">Account</a></button>
<button class="b2"><a href="http://localhost/mini_project/displayquery.php" style="text-decoration:none;">Query</a></button>
   <button class="b4"><a href="http://localhost/mini_project/query.php">Any Query</a></button>
   <br>
   <br>
   <div class="main">
    <div class="course">
        <div class="c1" style="height: 300px; width: 200px; background-color:white; border:2px solid black;">
        <h3>DATA STRUCTURE IN JAVA</h3>
        <img src="java.jpg" alt="JAVA">
        <p>Course code:201</p>
        <p>Cost: 2000</p>
        <p>Duration: 6month</p>
    </div>
        <div class="c1" style="height: 300px; width: 200px; background-color:white;  border:2px solid black;">
        <h3>FULLSTACK DEVELOPER</h3>
        <img src="fullstack.jpg" alt="FULL">
        <p>Course code:202</p>
        <p>Cost: 6000</p>
        <p>Duration: 10month</p>
    </div>
        <div class="c1" style="height: 300px; width: 200px; background-color:white;  border:2px solid black;">
        <h3>SQL DATABASES</h3>
        <img src="sql.jpg" alt="SQL">
        <p>Course code:203</p>
        <p>Cost: 5000</p>
        <p>Duration: 8month</p>
    </div>
        <div class="c1" style="height: 300px; width: 200px; background-color:white;  border:2px solid black;">
        <h3>ARTIFICIAL INTELIGENCE</h3>
        <img src="ai.jpg" alt="AI">
        <p>Course code:204</p>
        <p>Cost: 3000</p>
        <p>Duration: 5month</p>
    </div>
        <div class="c1" style="height: 300px; width: 200px; background-color:white;  border:2px solid black;">
        <h3>CYBER SECURITY</h3>
        <img src="cyber.jpg" alt="CYBER">
        <p>Course code:205</p>
        <p>Cost: 1000</p>
        <p>Duration: 7month</p>
    </div>
</div>
   </div>
   <p style="text-align:center;">for create an account</p>
<button class="b3"><a href="http://localhost/mini_project/registation.php">registation</a></button>

</body>
</html>