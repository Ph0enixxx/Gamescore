<?php
require './conn.php';
require './safe.php';
$name=$_GET['name'];
$score=$_GET['score']+1;
$safe=$_GET['sid'];
if(md5($score.$name)==$safe)
{
  $name=I($name);
  $score=I($score);
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