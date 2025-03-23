<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

$a=30;
$b=40;
echo "Before swapping a=$a b=$b<br>";
swap($a, $b);
echo("After swaping a=$a b=$b");

?>