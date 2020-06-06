<?php
include('Nav.php');
?>
<?php
echo "<h1>Передать голос</h1>";

$sql1=mysqli_query($db,"SELECT * FROM user WHERE IDUser=$IDUser");
$result1=mysqli_fetch_array($sql1);

$k=$result1['CountGolos'];

if ($k==0)
{
echo "Передано голосов ".$result1['CountPeredano']."<br> Лидеру ID=". $result1['PeredahoIDUser'].
"<br><button type='submit' class='btn btn-success' formaction='InsGolos.php' >Вернуть</button>";
}
else
{
//Таблица с пользователями
echo "<h3>Рейтинг лидеров</h3>";
echo "<table class='table table-sm'>
 <thead clasinfo'><tr ><th>ID </th><th>Фамилия</th>".
"<th> Имя</th><th>Username</th><th>Статус</th><th>Рейтинг активности</th><th>Кол-во голосов</th></tr></thead><tbody>";
$sql=mysqli_query($db,"SELECT * FROM User WHERE IDUser<>$IDUser AND Username<>'manager' ORDER BY CountGolos,Reiting DESC");

//вывод строк из массива $data в таблицу
while ($result=mysqli_fetch_array($sql)){

    echo "<tr>";
    echo "<td>".$result['IDUser']."</td>";
    echo "<td>".$result['Lastname']."</td>";
    echo "<td>".$result['Firstname']."</td>";
    echo "<td>".$result['Username']."</td>";
    echo "<td>".$result['Status']."</td>";
    echo "<td>".$result['Reiting']."</td>";
    echo "<td>".$result['CountGolos']."</td>";

    echo "<form  method='POST'>";
    echo "<input type='hidden' name='hidden' value='".$result['IDUser']."'>";
    echo "<input type='hidden' name='hidden1' value='".$IDUser."'>";
    echo "<input type='hidden' name='hidden2' value='".$k."'>";
    echo "<td><button type='submit' class='btn btn-success' formaction='InsGolos.php' >Проголосовать</button></td>";


    echo "</form>";
    echo "</tr>";
}
echo "</tbody></table></p></div>";
}

?>




</body>
</html>
