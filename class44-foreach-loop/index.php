<?php

$users=['Shanto','fahim','Mainul','Tonmoy','kayes'];
foreach($users as $x){

   
   if($x=="Mainul"){
    // break;
    continue;

    
   }
   echo $x .'<br>';
}

foreach ($users as $x):
    echo $x;
    echo "<br>";
    endforeach

?>