<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php operator</title>
</head>
<body>
    <?php
    /*
        unary ++a, --b;
        binary a+b;
        ternary a>b?a:b;

        >Type of operator
        1. Arithmetic operator
        2. Assignment operator
        3. Comparison operator  >,<,>=,<=,==,!=
        4. Logical operator  &&,||,!    
        5. Increment/Decrement operator  ++,--
        6. String operator  .
        7. Array operator  +,==,!=,<>
        8. Conditional assignment operator  ?:
    */
    //=====Arithemetic operator====
    $a=20;
    $b=30;
    echo"Addition=".$a+$b;
    echo "<br>";
    echo"Subtraction=".$a-$b;
    echo "<br>";
    echo"Multiplication=".$a*$b;
    echo "<br>";
    echo"Division=".$a/$b;
    echo "<br>";
    echo"Modulus=".$a%$b;
    //======Assignment operator

    $b=20;
    $d="20";
    echo"<br>";
    echo"Assing value=".$d;
    echo"<br>";
    if($b==$d){
        echo"A is equal to D";
        echo"<br>";
    }
    else{
        echo"A is not equal to D";
        echo"<br>";
    }
    if($b===$d){
        echo"A is identical to D";
        echo"<br>";
    }
    else{
        echo"A is not identical to D";
        echo"<br>";
    }

    //====Logical operator======
    /*
    logical:> 
    &&----AND
    ||---OR
    !====NOT   
     */
    $a=29;
    $b=77;
    if(!($a>30 && $b>30)){
        echo"Both are greater than 30";
        echo"<br>";
    }
    else{
        echo"Both are not greater than 30";
        echo"<br>";
    }
//=======String operator====
    $a=20;
    $b="value=";
    $b.=$a;
    echo"$b";

    //=======conditional operator=======  ?:

    $a=20;
    $c=33;
    echo"<br>";
    $d=$a>$b?"A is greator $a":"C is greator $c";
    echo"$d";
    ?>
</body>
</html>