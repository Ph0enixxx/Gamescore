<?php
require './conn.php';
  echo "<br>排名：<hr>";
  $sql="select * from game order by score desc";
  if($res=$conn->query($sql))
  {
    if($res->num_rows>0)
    {
      while($row=$res->fetch_assoc())
      {
        echo $row['name']."\t\t".$row['score']."\t\t".$row['time']."<hr>";
      }
    }//echo 'ok';
  }
  else 
  {
   $conn->error;
  }
  $conn->close();
