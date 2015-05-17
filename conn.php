<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'score');
  // Check connection
if ($conn->connect_error) 
{
   die("Connection failed: " . $conn->connect_error);
} 
$conn->query("set character set 'utf-8'");#http://www.t086.com/article/5027
?>