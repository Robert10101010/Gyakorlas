<?php
$tomb=array();
$x=1;
$sum=0;
for($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {
        $tomb[$i][$j]=$x;
        $x++;
    }
}
for($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {
    echo $tomb[$i][$j] . ' ';
    }
    echo"<br>";
}

?>