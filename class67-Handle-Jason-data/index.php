<?php
$user=["name"=>"Shanto","age"=>30,"email"=>"shanto@gmail.com"];
$userJson =json_encode($user);
echo $userJson;

echo "<br>";

$data='{"name":"Shanto","age":30,"email":"shanto@gmail.com"}';
$dataArray =json_decode($data,true);

print_r($dataArray);

?>