<form action="" method="POST">
Tipp:
<input type="text" name="number" value=''/> <br><br>
Eredmeny: 
<?php 
session_start();
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}
if(isset($_POST['button'])) {
    ++$_SESSION['counter'];
}    
if(isset($_POST['reset'])) {
    $_SESSION['counter'] = 0;
}
$szam= $_POST['number'];
$submitbutton= $_POST['button'];
$randomnumber= mt_rand(1,1000);
if ($submitbutton){
if ($szam > $randomnumber) {
    echo "  A szam nagyobb probalkozz ujra";
    }
elseif ($szam < $randomnumber) { 
    echo " A szam kisebb probalkozz ujra";
    }
else {
    echo "$randomnumber. Eltalatad.";
    }
}
?>
<br><?php echo $_SESSION['counter']; ?><br>
<input type="submit" name="button" value="Ellenorzes"/><br>
<input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
<input type="submit" name="reset" value="Reset" />
</form>


