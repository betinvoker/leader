<?php
include('db.php');

$IDUser=$_POST['hidden'];
$IDUser2=$_POST['hidden1'];
$k=$_POST['hidden2'];



$q="UPDATE USER SET CountGolos=CountGolos+$k WHERE IDUser=".$IDUser;


$sql=mysqli_query($db,$q) or die(mysqli_error());
$q2="UPDATE USER SET CountGolos=0,CountPeredano=$k,PeredahoIDUser =$IDUser WHERE IDUser=".$IDUser2;
   
$sql=mysqli_query($db,$q2) or die(mysqli_error());


echo "Ваше мнение учтено. Спасибо за участие!<a href='Golos.php'>Вернуться</a>";



?>