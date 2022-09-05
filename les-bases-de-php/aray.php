<?php
// array = tableau en PHP
$array = [1,2,3,4,1];
//$array[0] = "Coucou";
var_dump($array);
array_unshift($array, "Coucou");
var_dump($array);

//echo $array[5];

//echo "<br/>Hello ?";

$array[10] = 10 ;
var_dump($array);

$tableau = $array;
var_dump($array);
$montableau = [...$array] ;
var_dump($montableau);