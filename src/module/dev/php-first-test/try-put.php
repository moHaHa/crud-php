<?php
 header("Access-Control-Allow-Origin: *");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
 header('Content-Type: application/json');

$postdata = json_decode(file_get_contents("php://input"));

$taskId = $postdata['taskId'];
$name = $postdata['name'];
$description = $postdata['description'];
echo  $postdata ;
?>