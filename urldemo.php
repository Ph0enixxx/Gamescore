<?php
$score=123;
$name='aaa';
$uid=md5(($score+1).$name);
echo "<a href='./?score=123&&name=aaa&&sid=$uid'>click</a>";
?>