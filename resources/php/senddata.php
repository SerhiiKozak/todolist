<?php
require_once './init.php';


$done=$_POST(['done']);
$id=$_POST(['id']);
echo $id;
$sql="UPDATE 'Lists' SET 'done'=$done WHERE 'Lists'.'id'=$id";
$result=$conn->query($sql);
 ?>
