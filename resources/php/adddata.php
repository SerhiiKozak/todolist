<?php
require_once './init.php';



$name=$_POST(['name']);

echo $id;
$sql="INSERT INTO `Lists` WHERE (`id`, `Name`, `user`, `done`) VALUES (NULL, $name, '1', '0')";
$result=$conn->query($sql);
 ?>
