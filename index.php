<?php
require './conn.php';

$name=$_GET['name'];
$score=$_GET['score']+1;
$safe=$_GET['sid'];
if(md5($score.$name)==$safe)
{
  $sql="insert into game(name,score) values('$name','$score')";
  if($conn->query($sql) === TRUE)
  {
    echo 'ok';
  }
  else 
  {
   $conn->error;
  }
  $conn->close();
}
?>