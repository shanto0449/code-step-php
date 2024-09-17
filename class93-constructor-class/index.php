<?php
class properties{
    public $name ="Shanto Hosen";

    function getName(){
        echo $this -> name;
    }
}
$p1 = new properties();
$p1 -> getName();
?>