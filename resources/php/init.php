<?php
$servername='localhost';
$username='root';
$dbname='toDoLIST_base';
$userid=1;

$conn=new mysqli($servername,$username,'',$dbname);
if($conn->connect-error){
  die("Connection failed:" . $conn->connect_error);
}


?>
