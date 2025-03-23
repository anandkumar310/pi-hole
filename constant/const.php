<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Constant</title>
</head>
<body>
    <center>
    <?php
    $a=20;
    echo "a=$a";
    $a=30; //the value of a is changed
    echo "<br>";
    echo "a=$a";

    define('pi',3.14);
   $r=7;
   $a=pi*$r*$r;
   $c=2*pi*$r;
    echo "<br>";
    echo "Area of circle=$a";
    echo "<br>";
    echo "Circumference of circle=$c";
    ?>
    </center>
</body>
</html>