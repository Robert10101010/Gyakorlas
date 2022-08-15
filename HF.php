<?php
$sum=0;
$tomb=array();
for($i=0; $i<10; $i++) {
    $tomb[$i]=$i+1;
}
for($i=0; $i<10; $i++) {     
    echo $tomb[$i]. ' ' ;
        if ($i % 2 == 0) {
     
        } else {
        $sum += $i;
        }
    }
    echo"<br>";
    echo $sum;
?>

