<?php
function sum($a ,$b){
    echo $a + $b;
    echo "<br>";
}
sum(20 , 50);

sum(100 , 300);

function userData($name , $color){
    echo "<h1 style ='color:$color'> $name </h1> ";
}
userData("Shanto" , "green");
userData("Shanto" , "red");
userData("Shanto" , "yellow");
?>