<?php
// print_r($_FILES );

if($_FILES["Upload"]){
    $path= $_FILES["Upload"]['name'];
    echo $path;
} 
 


?>