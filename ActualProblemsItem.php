<?php
session_start();
if(isset($_SESSION['IDUser'])) { 
include('Nav.php'); 
}
else { 
session_destroy();
include('NavGuest.php');
}
?>
<body>

<?php
//Таблица с мероприятиями
$IDProblem = $_POST['hidden'];
include('db.php');
$sql=mysqli_query($db,"SELECT * FROM problems WHERE IDProblem=$IDProblem");
//вывод строк из массива $data в таблицу
$result= mysqli_fetch_array($sql);
?>

<div class="container" style="margin-top: 100px; margin-bottom: 500px;">
	<div class="row">
		<div class="col col-sm-12 col-md-12">
			<div class="card-body">
				<center><p class="card-title h1" style="margin-bottom: 50px;"><? echo $result['Nameproblem']?></p></center>
				<p class="card-text" style="margin-bottom: 30px;">
					<img src="<? echo $result['Photo'] ?>" width="450" height="300" align="left" vspace="5" hspace="5" style="margin-right: 20px;"><? echo $result['Description']?>
				</p>
				<p class="card-text">Рейтинг проблемы: <? echo $result['Rating']?></p>
				<p class="card-text" style="margin-bottom: 40px;">Статус: 
					<?
					if ($result['Status']==0)	{	$status="В рассмотрении";	} 
					else if ($result['Status']==1)	{	$status="Подтвержден";	}
					else if ($result['Status']==2)	{	$status="Отклонен";	}
					else	{	$status="Закончен";	} 					
					echo $status;
					?>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col col-sm-12 col-md-9">
			<div class="card-body">
				
			</div>
		</div>
		<div class="col col-sm-12 col-md-3">
			<div class="card-body">
				<?
				if($IDUser == $result['IDUser']){	echo "<button type='button' class='btn  btn-outline-info btn-lg'>Редактировать решение</button>";	}
				else {	echo "<button type='button' class='btn btn-outline-success btn-lg btn-block'>Предложить решение</button>";	}
				?>
			</div>
		</div>
	</div>
</div>

<footer class="footer-margin" style="position: ">
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="row">
			<div class="col align-self-end">
				<a class="p-2 text-white" href="#"><font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">О проекте</font></font>
				</a>
				<a class="p-2 text-white" href="#"><font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Обратная связь</font></font>
				</a>
				<a class="p-2 text-white" href="#"><font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Часто задаваемые вопросы</font></font>
				</a>
			</div>
		</div>
	</nav>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>