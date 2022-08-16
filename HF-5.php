<?php
	$tomb = array();			
	for($i=0;$i<7;) {
		$x = rand (1, 40);
		if(array( $x, $tomb) )  {
			$tomb[$i] = $x;
			$i++;
        }
	}
    echo"<br> Eredmeny:".' ';
	for($i=0;$i<7;$i++) {
	echo  $tomb[$i]. ' ';
	for($j=0;$j<7;$j++) { 
}
	}
	echo "<br>";
	echo "Eredmeny: ";
	asort($tomb);
foreach ($tomb as $key ) {
    echo "$key \n";
}
?>