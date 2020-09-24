<?php 
$server = "localhost";
$user = "root";
$password = "";
$database = "task";
$con= mysqli_connect($server,$user,$password,$database);
if(!$con){
    echo"connection error";
}
?>