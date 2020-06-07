<?php
include('db.php');
$IDPoll=$_POST['hidden'];
$Username=$_POST['hidden2'];

$q="UPDATE Poll SET Status=2 WHERE IDPoll=".$IDPoll;

$sql=mysqli_query($db,$q) or die(mysqli_error());

echo "Ваше мнение учтено. Спасибо за участие!<a href='PersonalAccount.php'>Вернуться</a>";
echo "<script>window.location = 'manager.php';</script>";
?>