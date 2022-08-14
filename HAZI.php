<?php
$tomb=array();
$x=1;
$sum=0;
for($i=0; $i<4; $i++) {
    for($j=0; $j<4; $j++) {
        $tomb[$i][$j]=$x;
        $x++;
    }
}
for($i=0; $i<4; $i++) {
    for($j=0; $j<4; $j++) {
        
    echo $tomb[$i][$j] . ' ';
    if ($tomb[$i][$j] % 2 == 0) {
     
    } else {
    $sum += $tomb[$i][$j];
    }
}
    
    echo"<br>";

}
echo $sum;

?>