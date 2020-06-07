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
$query=mysqli_query($db,"SELECT Lastname, Firstname, Fathername, user.Photo FROM problems, user WHERE IDProblem=$IDProblem AND problems.IDUser = user.IDUser");
//вывод строк из массива $data в таблицу
$result=mysqli_fetch_array($sql);
$autor=mysqli_fetch_array($query);
?>

<div class="container" style="margin-top: 70px; margin-bottom: 400px;">
	<div class="row">
		<div class="col col-sm-12 col-md-12">
			<div class="card-body">
				<center><p class="card-title h1" style="margin-bottom: 40px;"><? echo $result['Nameproblem']?></p></center>
				<p class="card-text" style="margin-bottom: 40px;">
					<img src="<? echo $result['Photo'] ?>" width="450" height="300" align="left" vspace="5" hspace="5" style="margin-right: 20px;"><? echo $result['Description']?>
				</p>
				<p class="card-text">Голосов: <? echo $result['Rating']?></p>
				<p class="card-text" style="margin-bottom: 30px;">Статус: 
					<?
					if ($result['Status']==0)	{	$status="В рассмотрении";	} 
					else if ($result['Status']==1)	{	$status="Подтвержден";	}
					else if ($result['Status']==2)	{	$status="Отклонен";	}
					else	{	$status="Закончен";	} 					
					echo $status;
					?>
				</p>
				<p class="card-text">Предложил: <? echo $autor['Lastname'].' '.$autor['Firstname'].' '.$autor['Fathername']; ?></p>
			</div>
		</div>
	</div>
	<div class="row" style="margin-bottom: 50px;">
		<div class="col col-sm-12">
			<div class="card-body">
				<form  action="solutionProblem.php" method="POST">
					<button type="button" class="btn btn-outline-success btn-lg"><img src="icons/heart.svg" alt="" width="20" height="20" style="margin-bottom: 3px;">Проголосовать</button>
					<button type="button" class="btn btn-outline-primary btn-lg"><img src="icons/chat.svg" alt="" width="20" height="20" style="margin-bottom: 3px;">Оставить комментарий</button>
					<button type="button" class="btn  btn-outline-warning btn-lg">Редактировать решение</button>
					<? echo "<input type='hidden' name='hidden' value='".$result['IDProblem']."'>"; ?>
					<button type="submit" class="btn btn-outline-success btn-lg" formaction="solutionProblem.php">Предложить решение</button>
				</form>
			</div>
		</div>
	</div>
	<div class="row" style="margin-left: 40px; margin-right: 40px;">
		<div class="media">
			<img src="\images\q5.jpg" width="50" height="50" class="mr-3" alt="...">
			<div class="media-body">
				<h5 class="mt-0">Нина Ликова</h5>
					Учитывая это, — продолжает начальник управления образования Ростова, — необходимо рассмотреть возможность оказания поддержки частным образовательным учреждениям, которые предоставят места для детей, стоящих в муниципальной очереди. Это может стать для нас значимым ресурсом.

				<div class="media mt-3">
					<a class="mr-3" href="#">
						<img src=".<? echo $autor['Photo'] ?>." width="50" height="50" class="mr-3" alt="...">
					</a>
					<div class="media-body">
						<h5 class="mt-0"><? echo $autor['Lastname'].' '.$autor['Firstname'].' '.$autor['Fathername']; ?></h5>
							Большое спасибо за ваш комментарий.
					</div>
				</div>
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