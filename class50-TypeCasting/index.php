<?php
$a=true;
$a=(string) $a;

$b="300";
$b=(int)$b;

$c=1;
$c=(float) $c;

$d="abc";
$d=(boolean) $d;

$e=10;
$e=(array)$e;

$f=20;
$f=(object)$f;
var_dump($f);

?>