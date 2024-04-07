<?php
$server="localhost";
$user="root";
$password="";
$database="CMS1";
$connection=mysqli_connect($server,$user,$password,$database);
if($connection){
  
}
else{
    echo "not connected ";
}
/*$sql="CREATE DATABASE CMS1";
$result=mysqli_query($connection,$sql);
if($result){
    echo "created";
}
else{
    echo "not created";
}*/
?>