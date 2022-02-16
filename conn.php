<?php 
$serverName= "localhost";
$userName="root";
$password="root";
$dbname="ats";

$conn=mysqli_connect($serverName,$userName,$password,$dbname);

if (mysqli_connect_errno()){
    echo"connection failed";
    exit();
}
echo"connection successfully";







?>