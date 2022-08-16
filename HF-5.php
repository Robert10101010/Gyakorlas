<?php
	$tomb = array();			
	for($i=0;$i<7;) {
		$x = rand (1, 40);
		if(array( $x, $tomb) )  {
			$tomb[$i] = $x;
			$i++;
        }
	}
    echo "eredmeny:";
    var_dump($tomb);
    echo"<br> Eredmeny:".' ';
    sort($tomb);
	for($i=0;$i<7;$i++) {
       
	echo  $tomb[$i]. ' ';
	for($j=0;$j<7;$j++) {
       
    
}
	}
?>