<?php
include('db.php');
$options="Count".$_POST['options'];
$IDUser=$_POST['hidden2'];

if (isset($_POST['options'])){

$q="UPDATE Poll SET $options=$options+1 WHERE IDPoll=".$_POST['hidden'];


$sql=mysqli_query($db,$q) or die(mysqli_error());
$q2="UPDATE USER SET Reiting=Reiting+5 WHERE IDUser=".$IDUser;
   
$sql=mysqli_query($db,$q2) or die(mysqli_error());
echo "Ваше мнение учтено. Спасибо за участие!<a href='Index.php'>Вернуться</a>";
}
?>