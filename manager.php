<?php
include('Nav_manager.php');
?>
 
<div class="container-fluid"> 
	<div class="row">
		<div class="col col-sm-12">
			<h1>Новые заявки на подтверждение</h1>
		</div>
		<div class="col col-sm-12">
			<table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">			
<?php
						echo "
						<thead clasinfo'><tr ><th>ID проблемы</th><th>Тема проблемы</th><th>Описание</th>".
						"<th> Статус</th><th>Рейтинг</th><th>Уровень</th><th>Подтвердить</th><th>Отклонить</th></tr></thead><tbody>";
						$sql=mysqli_query($db,"SELECT * FROM problems INNER JOIN user ON problems.IDUser=user.IDUser WHERE problems.Status=0");

						//вывод строк из массива $data в таблицу
						while ($result=mysqli_fetch_array($sql)){

						echo "<tr>";
						echo "<td>".$result['IDProblem']."</td>";
						echo "<td>".$result['Nameproblem']."</td>";
						echo "<td>".$result['Description']."</td>";
						if ($result['Status']==0)	{	$status="В рассмотрении";	} 
						else if ($result['Status']==1)	{	$status="Подтвержден";	} 
						else if ($result['Status']==2)	{	$status="Отклонен";	}
						else	{	$status="Закончен";	 } 
    
						echo "<td>".$status."</td>";
						echo "<td>".$result['Rating']."</td>";
						echo "<td>".$result['Level']."</td>";

						
						echo "<form  method='POST'>";
						echo "<input type='hidden' name='hidden' value='".$result['IDPoll']."'>";
						echo "<td><button type='submit' class='btn btn-success' formaction='Poll.php' >Обзор</button></td>";
						echo "<td><button type='submit' class='btn btn-success' formaction='del_meropr.php'>Закончить</button></td>";

						echo "</form>";
						echo "</tr>";
						}
						echo "</tbody>";



?>
			</table>
		</div>
		<div class="col col-sm-12">
		<table class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
			<thead "clasinfo">
			<tr>
				<th>ID</th>
				<th>Тема</th>
				<th>Название</th> 
				<th> Дата начала</th>
				<th>Ответ 1</th>
				<th>Ответ 2</th>
				<th>Ответ 3</th>
				<th>Автор</th>
				<th>Рейтинг</th>
			</tr>
			</thead>
			<tbody>
<?php
//Таблица с неподтвержденными опросами
$sql=mysqli_query($db,"SELECT IDPoll,Thema,Name,DateBegin,Q1,Q2,Q3,Username,Reiting FROM user INNER JOIN poll ON user.IDUser=poll.IDUser WHERE poll.Status=0");
//вывод строк из массива $data в таблицу
while ($result=mysqli_fetch_array($sql)){

    echo "<tr>";
    echo "<td>".$result['IDPoll']."</td>";
    echo "<td>".$result['Thema']."</td>";
    echo "<td>".$result['Name']."</td>";
    echo "<td>".$result['DateBegin']."</td>";
    echo "<td>".$result['Q1']."</td>";
    echo "<td>".$result['Q2']."</td>";
    echo "<td>".$result['Q3']."</td>";
    echo "<td>".$result['Username']."</td>";
    echo "<td>".$result['Reiting']."</td>";

    echo "<form  method='POST'>";
    echo "<input type='hidden' name='hidden' value='".$result['IDPoll']."'>";
    echo "<input type='hidden' name='hidden2' value='".$result['Username']."'>";
    echo "<td><button type='submit' class='btn btn-success' formaction='ok.php' >Подтвердить</button></td>";
    echo "<td><button type='submit' class='btn btn-success' formaction='del.php'>Отклонить</button></td>";

    echo "</form>";
    echo "</tr>";
}

?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
