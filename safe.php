<?php
#the filter
function I($str)
{
  if(!get_magic_quotes_gpc())
  {
    $str=addslashes($str);
  }
  $str=mysql_real_escape_string($str);
  $str=htmlentities($str,ENT_NOQUOTES,'UTF-8');
  return $str;
}
?>