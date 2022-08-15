<?php
$sum=0;
$tomb=array();
for($i=0; $i<10; $i++) {
    $tomb[$i]=$i+1;
}
for($i=0; $i<10; $i++) {     
    echo $tomb[$i]. ' ' ;
        if ($tomb[$i] % 2 == 0) { 
            // ha az ellenkezőjét akarod ellenőrizni, vagyis, hogy páratlan a szám akkor negálni kell a feltételt
            // tehát ez: if($tomb[$i] % 2 == 0) azt nézi hogy páros e a szám
            // ez pedig azt, hogy páratlan-e if($tomb[$i] % 2 != 0)
            // Ha igy csinálod nem fog kelleni az üres if. Nem hiba az sem ahogy csináltad, de ez a szebb megoldás.
     
        } else {
        $sum += $tomb[$i];
        }
    }
    echo"<br>";
    echo $sum;
?>

