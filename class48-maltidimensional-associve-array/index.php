<?php
$user=[
    ["Nmae"=>"shanto","Age"=>"27","City"=>"Natore"],
    ["Nmae"=>"Mainul","Age"=>"24","City"=>"Madaripur"],
    ["Nmae"=>"fahim","Age"=>"26","City"=>"Pabna"]
];

foreach($user as $users ){
    foreach($users as $key=> $items){
        
        echo "$key  $items" ;
        echo "<br>";
    }
}
// for($i=0;$i<count($user);$i++){

//     for($j=0;$j<count($user[$i]); $j++){
//         echo $user[$i][$j];
//     }
// }
?>