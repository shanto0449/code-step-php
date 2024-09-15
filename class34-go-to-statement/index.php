<?php
$x=10;
echo "before condition <br>";

if($x ==20){
    goto jump;
}

$name="santo <br>";
echo $name;


jump:
echo "statement is jump on line number 15 ,<br>";

?>

<?php
for($i=0;$i<10;$i++){
    echo "$i <br>";

    if($i==5){
        goto outsideloop;
    }
}

outsideloop:
echo "loop is brake";

?>

