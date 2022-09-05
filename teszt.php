<html>
<head>
  
</head>
<body>
<form action="teszt.php" method="POST">
    <input name="tomb" type="text">
<input type="submit" name="gomb" id="">

</form>

</body>
    </html>
<?php
if(isset($_POST['gomb'])) {
    $array_size=$_POST['tomb'];
    $array_data=[];
    $count=1;
    $col=0;
    $row=0;
    $star="*";
    while ($count <= ($_POST['tomb']*$_POST['tomb'])) {
        for ($i=$col, $j=$row ; $i <$array_size ; $i++) { 
            $array_data[$j][$i]=$count;
            $count++; 
        }
        $row++;
        $j=$row;
        $i=$array_size-1;
        for (; $j < $array_size; $j++) { 
            $array_data[$j][$i]=$count;
            $count++;
        }

        $array_size--;
        $j=$array_size;
        $i--;
        for (; $i >=$col; $i--) { 
            $array_data[$j][$i]=$count;
            $count++;
        }  

        $i=$col;
        $j--;
        $col++;
        $star="*";
        for (; $j >=$row ; $j--) { 
           $array_data[$j][$i]=$count;
           $count++;
        
        }
       
       
    }
   
    showArray($array_data,$_POST['tomb']);
   
}

function showArray($array, $size){
        for ($i=0; $i <$size ; $i++) { 
         for ($j=0; $j <$size ; $j++) { 
            if ($array[$i][$j]%2==0 || $size%2==0 ) {
                echo $array[$i][$j].' ';
            } else {
                 echo '-'. $array[$i][$j].' ';
            }
        }
         echo "<br>";
        }
}


    ?>
