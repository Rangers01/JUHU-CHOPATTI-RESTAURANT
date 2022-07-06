<?php
$host='localhost';
$user='root';
$pw='';
$dbname='juhu_chopatti';
 $con= mysqli_connect($host,$user,$pw) or die(mysqli_error());
  mysqli_select_db($con,$dbname);
  ?>
  