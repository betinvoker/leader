<?php
    $login=$_POST['user_name'];
    $pas=$_POST['p1'];
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $status=$_POST['status'];
    $email=$_POST['email'];
    $tel=$_POST['tel'];
    session_start();

    include("db.php");
    $sql=mysqli_query($db,"SELECT * FROM User WHERE Username='$login'");
    $result=mysqli_fetch_array($sql);
    if (!empty($result['IDUser']))
    {exit ("Извините, такой логин уже существует!");}
    $sql=mysqli_query($db,"INSERT INTO User (Lastname,Firstname,Status,Username,Passw,EMail,Tel) 
    VALUES('$lastname','$firstname','$status','$login','$pas','$email','$tel')");
    if($sql='TRUE')
    {echo "Вы успешно зарегистрированы!<br>
         Теперь Вы можете авторизоваться и войти в 
         личный кабинет.<a href='Reg.php'><br>
         Перейти в личный кабинет.'</a>' ";
     echo  "<script>window.location = 'PersonalAccount.php';</script>";
        $sql=mysqli_query($db,"SELECT Max(IDUser) As M FROM User");
    $result=mysqli_fetch_array($sql);
  
        $_SESSION['Username']= $login;
        $_SESSION['IDUser']=$result['M'];
      
    }
       
else {
    echo "Ошибка регистрации";
}
?>
