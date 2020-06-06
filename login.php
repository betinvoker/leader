<?php
    session_start();
$login=$_POST['login'];
$pas=$_POST['p'];


if(empty($login) or empty($pas))
{
    exit("Вы ввели не всю информацию");
}
include('db.php');
$result=mysqli_query($db,"SELECT * FROM user WHERE Username='$login'");
$myrow=mysqli_fetch_array($result);

if(empty($myrow['Username']))
{
    exit("Пользователь с таким логином не зарегистрирован!");
}
else{
    if($myrow['Passw']==$pas)
    {
       
        if ($myrow['Username']=="manager") {
           echo  "<script>window.location = 'manager.php';</script>";
        
                        $_SESSION['UsernameM']=$myrow['Username'];
            $_SESSION['IDUserM']=$myrow['IDUser'];
         
       
        }
        else 
        {
            echo "Вы успешно вошли на сайт <a href='PersonalAccount.php'>Перейти в личный кабинет</a>".
            "<script>window.location = 'PersonalAccount.php';</script>";
        
                        $_SESSION['Username']=$myrow['Username'];
            $_SESSION['IDUser']=$myrow['IDUser'];
        
        }
    }
    else {
        echo "Пароль не верный";
    }
}
?>
