<?php
require './conn.php';
require './safe.php';
  echo "<br>排名：<hr>";
  $sql="select * from game order by score desc";
  if($res=$conn->query($sql))
  {
    if($res->num_rows>0)
    {
      while($row=$res->fetch_assoc())
      {
        echo I($row['name'])."\t\t".I($row['score'])."\t\t".I($row['time'])."<hr>";
      }
    }//echo 'ok';
  }
  else 
  {
   $conn->error;
  }
  $conn->close();
