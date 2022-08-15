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
    echo $tomb[$i][$j]= rand(1, 100). ' ';
   if($j==0){
    $sum += $tomb[$i][$j];
   }
} 
    echo"<br>";
}
    echo"<br>";
    echo "Eredmeny:<br>". $sum;
?>