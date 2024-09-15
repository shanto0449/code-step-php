<?php
$user = [
    [1,"shanto","rajshahi","shanto@gmail.com"],
    [2 , "Mainul","madaripur","mainul@gmail.com"],
    [3 , "Fahim","pabna","fahim@gmail.com"]

];
for($i=0; $i<count($user); $i++){

    for($j=0; $j<count($user[$i]); $j++){
        echo $user[$i] [$j] ;
        echo "<br>";
    }
}
?>