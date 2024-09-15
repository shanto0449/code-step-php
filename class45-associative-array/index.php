<?php
$userDetails =[
    "name"=>"Shanto",
    "age" => 27,
    "city"=>"Dhaka",
    "email"=> "shanto@gmail.com",
    "number"=>" 01710458584"
];

foreach ($userDetails as $key => $data ){
    echo $key. " is" . $data;
    echo "<br>";
}

?>