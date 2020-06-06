<?php
include('db.php');
$IDPoll=$_POST['hidden'];
$Username=$_POST['hidden2'];

$q="UPDATE Poll SET Status=1 WHERE IDPoll=".$IDPoll;

$sql=mysqli_query($db,$q) or die(mysqli_error());
$q2="UPDATE USER SET Reiting=Reiting+20 WHERE Username="."'$Username'";

$sql=mysqli_query($db,$q2) or die(mysqli_error());
echo "Ваше мнение учтено. Спасибо за участие!<a href='PersonalAccount.php'>Вернуться</a>";
echo "<script>window.location = 'manager.php';</script>";


?>