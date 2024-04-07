<?php include "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styleregistation.css">
</head>
<body style="background-image: linear-gradient(90deg, rgb(15, 15, 15),rgb(119, 119, 119)),linear-gradient(67.5deg, rgb(61, 40, 216) 0%, rgb(61, 40, 216) 19%,rgb(55, 42, 182) 19%, rgb(55, 42, 182) 27%,rgb(49, 44, 147) 27%, rgb(49, 44, 147) 37%,rgb(42, 46, 113) 37%, rgb(42, 46, 113) 48%,rgb(36, 48, 78) 48%, rgb(36, 48, 78) 73%,rgb(30, 50, 44) 73%, rgb(30, 50, 44) 100%),linear-gradient(0deg, rgb(61, 40, 216) 0%, rgb(61, 40, 216) 19%,rgb(55, 42, 182) 19%, rgb(55, 42, 182) 27%,rgb(49, 44, 147) 27%, rgb(49, 44, 147) 37%,rgb(42, 46, 113) 37%, rgb(42, 46, 113) 48%,rgb(36, 48, 78) 48%, rgb(36, 48, 78) 73%,rgb(30, 50, 44) 73%, rgb(30, 50, 44) 100%),linear-gradient(22.5deg, rgb(61, 40, 216) 0%, rgb(61, 40, 216) 19%,rgb(55, 42, 182) 19%, rgb(55, 42, 182) 27%,rgb(49, 44, 147) 27%, rgb(49, 44, 147) 37%,rgb(42, 46, 113) 37%, rgb(42, 46, 113) 48%,rgb(36, 48, 78) 48%, rgb(36, 48, 78) 73%,rgb(30, 50, 44) 73%, rgb(30, 50, 44) 100%); background-blend-mode:overlay, overlay, overlay, normal;">
<?php
    if(isset($_POST['submit'])){
        echo " Your form submitted successfully ";
        echo "<br>";
        
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $select=$_POST['select'];
       
        if(strlen($username)<5){
            echo " user name is too short ";
            echo " <br>";
        }
        elseif(strlen($username)>32){
            echo " user name is too large ";
            echo " <br>";
        }
        else{
            echo "continue with the form ";
        }

        if(strlen($password)<10){
            echo " too sort ";
            echo " <br>";
        }
        elseif(strlen($password>20)){
            echo " too large ";
            echo " <br>";
        }
        else{
            echo " continue with form ";
            echo " <br>";
        }
        /*$sql="CREATE TABLE REGI(`S.NO` INT(20),`NAME OF USER` VARCHAR(30),`E-MAIL` VARCHAR(30),`PASSWORD` CHAR(30)),`COURSE CODE` INT(5)";
        $result=mysqli_query($connection,$sql);
        if($result){
            echo "created";
        }
        else{
            echo "not created ";
        }*/
        $sno=0;
        $sql="INSERT INTO REGI(`S.NO`,`NAME OF USER`,`E-MAIL`,`PASSWORD`,`COURSE CODE`) VALUES ('$sno','$username','$email','$password','$select')";
        $result=mysqli_query($connection,$sql);
        if($result){
            echo "Inserted sucessfully";
            echo " <br>";
        }
       
        else{
            echo "not inserted ";
            echo " <br>";
    }
}
    ?>
  <div class="c1" style="background-image: linear-gradient(90deg, rgb(209, 209, 209),rgb(207, 207, 207)),linear-gradient(45deg, rgb(177, 223, 206) 0%, rgb(177, 223, 206) 46%,rgb(147, 192, 214) 46%, rgb(147, 192, 214) 56%,rgb(117, 162, 222) 56%, rgb(117, 162, 222) 61%,rgb(86, 131, 229) 61%, rgb(86, 131, 229) 64%,rgb(56, 101, 237) 64%, rgb(56, 101, 237) 82%,rgb(26, 70, 245) 82%, rgb(26, 70, 245) 100%),linear-gradient(135deg, rgb(177, 223, 206) 0%, rgb(177, 223, 206) 46%,rgb(147, 192, 214) 46%, rgb(147, 192, 214) 56%,rgb(117, 162, 222) 56%, rgb(117, 162, 222) 61%,rgb(86, 131, 229) 61%, rgb(86, 131, 229) 64%,rgb(56, 101, 237) 64%, rgb(56, 101, 237) 82%,rgb(26, 70, 245) 82%, rgb(26, 70, 245) 100%); background-blend-mode:overlay,overlay,normal; height: 580px;">
    <form action="registation.php" method="post">
        <h1>Enter your username</h1>
        <input type="text" name="username" class="placeholder" placeholder=" Enter your username ">
        <h1>Enter your email</h1>
        <input type="text" name="email" class="placeholder" placeholder=" Enter your email ">
        <h1>Enter your password</h1>
        <input type="password" name="password" class="placeholder" placeholder=" Enter your password ">
        <h1>Select course code</h1>
        <select name="select" class="select">
            <option value="1">please select code</option>
            <option value="2">201</option>
            <option value="3">202</option>
            <option value="4">203</option>
            <option value="5">204</option>
            <option value="6">205</option>
        </select>
        <br>
        <br>
        <input type="submit" name="submit" class="submit">
    </form>
</body>
</html>
<div class="c2">
