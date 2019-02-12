<?php
require_once './init.php';

$sql="SELECT * FROM Lists Where user=$userid";
$result=$conn->query($sql);
if($result->num_rows >0){
  $data=array();
  while ($row = $result->fetch_assoc()) {
    $arr= array('id'=>$row['id'], 'Name'=>$row['Name'], 'user'=>$row['user'],
  'done'=>$row['done']);
    array_push($data,$arr);
    //echo (json_encode($arr). ',') ;
    }
   echo json_encode($data);

  }else{
    echo json_encode('0 results');
  }

$conn->close();
 ?>
