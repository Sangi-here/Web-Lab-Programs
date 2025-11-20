<?php
$servername="localhost";
$username="root";
$password="";
$dbname="loginform";
$conn = new mysqli("localhost", "root", "", "loginform");
if($conn->connect_error)
{
 die("Connection failed:".$conn->connect_error);
 }
?>
