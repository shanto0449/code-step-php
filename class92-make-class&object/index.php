<?php
class MathOperations{
  function sum($a , $b){
   echo $a+$b;
  }
}

$maths = new MathOperations();
 $maths ->sum( 20 , 30);
?>