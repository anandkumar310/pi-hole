<?php
$mystr="I am Anand kumar";
echo "Length of string=".strlen($mystr)."<br>";
echo "Word count=".str_word_count($mystr)."<br>";

$b="Data fair php free course with free certificate";
$m=str_word_count($b);
$newstr=chunk_split($b,2,' ');
echo $newstr."<br>";
$no=substr_count($b,"a");
echo"number of a latter=".$no."<br>";

echo"total word:".$m;
echo"<br>";
$n=strlen($b);
echo $b."<br>";
echo"length is=".$n;
?>