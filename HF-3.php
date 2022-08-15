<?php
$tomb=array();
$x=1;
$paros=0;
$paratlan=0;
for($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {
        $tomb[$i][$j]=$x;
        $x++;
    }
}
for($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {
        echo $tomb[$i][$j] . ' ';
        if ($tomb[$i][$j]%2 == 0) {
            $paros++; 
        } else {
            $paratlan++;  
         } 
    }
        echo "<br>";
} 
        echo "<br>";

        echo "Paros: $paros" . "<br />";
        echo "Paratlan: $paratlan";
?>