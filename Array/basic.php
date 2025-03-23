<?php
/*
Type of array
    1> Simple array
    2> Associative Array
*/

//=====Simple Array=====
$ar=array("Delhi","Pune","Noida","Grugram");
//print_r($ar);
for ($i=0; $i <count($ar) ; $i++) { 
    echo $ar[$i].",";
}
?>
