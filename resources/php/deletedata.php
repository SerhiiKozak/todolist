<?php
require_once './init.php';


$id=$_POST(['id']);
echo $id;
$sql="DELETE * FROM 'Lists' WHERE 'Lists'.'id'=$id";
$result=$conn->query($sql);
 ?>
