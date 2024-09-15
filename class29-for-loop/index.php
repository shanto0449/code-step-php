<?php
for($start = 1; $start<=10; $start++){
    echo "$start code stape by steps: <br>";
    if($start == 5){
        break;
    }
}


?>

<?php
$table = 10;
for($start = 1; $start<=10; $start++){

    if ($start ==3 || $start == 6){
        continue;
    }
    echo $table * $start;
    echo '<br>';


}

?>