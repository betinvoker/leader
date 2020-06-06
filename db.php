<?php
    $host="localhost";
    $user="root";
    $passw="";
    $db_name="leader_db";
    $db=mysqli_connect($host,$user,$passw,$db_name) ;
    //$db=mysql_select_db($db_name,$conn) or die(mysql_errno($db).mysql_error($db));
    if (!$db) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    ?>
