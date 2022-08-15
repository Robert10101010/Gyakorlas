<?php
$tomb=array();
$x=1;
$sum=0;
$sum1=0;
$sum2=0;
$sum3=0;
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
   elseif($j==1){
    $sum1 += $tomb[$i][$j];
   }elseif($j==2){
    $sum2 += $tomb[$i][$j];
   }elseif($j==3){
    $sum3 += $tomb[$i][$j];
   }
} 
    echo"<br>";
}
    echo"<br>";
    echo "Eredmeny:<br>". $sum.' ', $sum1.' ', $sum2.' ', $sum3;
?>