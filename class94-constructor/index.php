<?php
class constructorDamo{
   
// function setName(){
//     echo "hello";
//     }
public $name;

function __construct($name){
    $this->name=$name;
}

function displayName(){
    echo $this -> name;
}

}

$cd = new constructorDamo("Shanto Hosen");

$cd -> displayName();
?>