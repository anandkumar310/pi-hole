 <?php
 function display($a,$b){
   $c=$a+$b;
    echo"<h2 style='color:blue '>Jai Shree Ram $c</h2>";
        echo"<h2 style='color:red '>Jai Shree Ram</h2>";
 }
 function display1(){
    echo"<h2 style='color:blue '>Jai Shree Ram</h2>";
        echo"<h2 style='color:red '>Jai Shree Ram</h2>";
 }
 for($i=0;$i<50;$i++){
    display1();
    display(30,40);
    echo"<br>";
 }
 ?>