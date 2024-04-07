<?php include "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="querystyle.css">
</head>
<body style="background-image: linear-gradient(90deg, rgb(209, 209, 209),rgb(207, 207, 207)),linear-gradient(45deg, rgb(177, 223, 206) 0%, rgb(177, 223, 206) 46%,rgb(147, 192, 214) 46%, rgb(147, 192, 214) 56%,rgb(117, 162, 222) 56%, rgb(117, 162, 222) 61%,rgb(86, 131, 229) 61%, rgb(86, 131, 229) 64%,rgb(56, 101, 237) 64%, rgb(56, 101, 237) 82%,rgb(26, 70, 245) 82%, rgb(26, 70, 245) 100%),linear-gradient(135deg, rgb(177, 223, 206) 0%, rgb(177, 223, 206) 46%,rgb(147, 192, 214) 46%, rgb(147, 192, 214) 56%,rgb(117, 162, 222) 56%, rgb(117, 162, 222) 61%,rgb(86, 131, 229) 61%, rgb(86, 131, 229) 64%,rgb(56, 101, 237) 64%, rgb(56, 101, 237) 82%,rgb(26, 70, 245) 82%, rgb(26, 70, 245) 100%); background-blend-mode:overlay,overlay,normal; height: 580px;">
<?php
    if(isset($_POST['submit'])){
        echo " Your query submitted successfully ";
        echo "<br>";
        $query=$_POST['query'];
        $number=$_POST['number'];
        $name=$_POST['name'];
        /*
        $sql="CREATE TABLE Querytab(`QUERY ROW` VARCHAR(3000),`Phone number`char(10),`Name OF User` varchar(399))";
        $result=mysqli_query($connection,$sql);
        if($result){
            echo "created";
        }
        else{
            echo "not created ";
        }*/
        $sql="INSERT INTO Querytab(`QUERY ROW`,`Phone number`,`Name OF User`) VALUES ('$query','$number','$name')";
        $result=mysqli_query($connection,$sql);
        if($result){
            echo "inserted successfully";
        }
        else{
            echo " not created ";
        }

    }
        ?>
<div class="c1" style="background-image: linear-gradient(135deg, rgba(159, 159, 159, 0.46) 0%, rgba(159, 159, 159, 0.46) 14.286%,rgba(165, 165, 165, 0.46) 14.286%, rgba(165, 165, 165, 0.46) 28.572%,rgba(171, 171, 171, 0.46) 28.572%, rgba(171, 171, 171, 0.46) 42.858%,rgba(178, 178, 178, 0.46) 42.858%, rgba(178, 178, 178, 0.46) 57.144%,rgba(184, 184, 184, 0.46) 57.144%, rgba(184, 184, 184, 0.46) 71.43%,rgba(190, 190, 190, 0.46) 71.43%, rgba(190, 190, 190, 0.46) 85.716%,rgba(196, 196, 196, 0.46) 85.716%, rgba(196, 196, 196, 0.46) 100.002%),linear-gradient(45deg, rgb(252, 252, 252) 0%, rgb(252, 252, 252) 14.286%,rgb(246, 246, 246) 14.286%, rgb(246, 246, 246) 28.572%,rgb(241, 241, 241) 28.572%, rgb(241, 241, 241) 42.858%,rgb(235, 235, 235) 42.858%, rgb(235, 235, 235) 57.144%,rgb(229, 229, 229) 57.144%, rgb(229, 229, 229) 71.43%,rgb(224, 224, 224) 71.43%, rgb(224, 224, 224) 85.716%,rgb(218, 218, 218) 85.716%, rgb(218, 218, 218) 100.002%); position:relative; left: 400px; top: 100px; border:3px solid black; height: 300px; width: 300px; border-radius:2rem; text-align:center;">
    <form action="query.php" method="post">
        <h4>Please enter your query</h4>
        <input type="text" style="border-radius:2rem" name="query" class="placeholder" class="placeholder" placeholder=" Enter your query? ">
        <br>
        <h4>Enter your number</h4>
        <input type="number" style="border-radius:2rem" placeholder="enter your number" class="placeholder" name="number">
        <br>
        <h4>Enter your name</h4>
        <input type="name" style="border-radius:2rem" placeholder="enter your name" class="placeholder" name="name">
        <br>
        <br>
        <input type="submit" style="border-radius:2rem" name="submit" class="submit">
        <br>
    </form>
    
</body>
</html>
