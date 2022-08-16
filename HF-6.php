<?php
$tomb1=array();
$x=rand(1,50);
for($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {
        $tomb1[$i][$j]=$x;
        $x++;
    }
}
$tomb2=array();
$x=rand(1,50);
for($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {
        $tomb2[$i][$j]=$x;
        $x++;
    }
}
echo"Tomb1: <br>";
for($i=0; $i<3; $i++) {
    for($j=0; $j<3; $j++) {    
    echo $tomb1[$i][$j] . ' ';
    
}
    echo"<br>";
}
echo"<br>";
echo"Tomb2: ";
for($i=0; $i<3; $i++) {
    echo"<br>";
    for($j=0; $j<3; $j++) {    
    echo $tomb2[$i][$j]=$tomb1[$j][$i] . ' ';  
        
        }   
}

?>