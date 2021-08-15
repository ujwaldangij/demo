<?php

header('Content-Type:application/json');
header('Access-Control-Allow-Methods:Post');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type');

$data= json_decode(file_get_contents('php://input'),true);
$no1= $data['no1'];
$no2= $data['no2'];
$result= $no1+$no2;
if ($result > 0) {
    # code...
    echo json_encode(["msg"=>"Addition of 2 no is ","status"=>true]);
}else{
    echo json_encode(["msg"=>"some thing went wrong ","status"=>false]);
}
?>