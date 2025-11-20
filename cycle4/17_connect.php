<?php
$servername="localhost";
$username="root";
$password="";
$dbname="book_db";
$conn = new mysqli("localhost", "root", "", "book_db");
if($conn->connect_error)
{
 die("Connection failed:".$conn->connect_error);
 }

?>
