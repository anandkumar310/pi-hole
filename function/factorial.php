<?php
function fact($a){
    $f=1;
    for($i=1;$i<=$a;$i++){
        $f=$f*$i;
    }
    return $f;
}
echo "factorial=".fact(6);


function fact1($a){
     if($a==0){
        return 1;
    }
    else{
        return $a*fact1($a-1);
    }
}
$m=fact1(4);
echo "<br>factorial=".$m;
?>