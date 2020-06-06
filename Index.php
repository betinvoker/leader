<?php
include('NavGuest.php');
?>

<div class="container-fluid" style="margin-top: 90px;">
	<div class="card text-dark">
		<img src="images/poster.jpg" class="card-img-top poster-fix-size" alt="...">
		<div class="card-body" style="padding-bottom: 0px; padding-top: 0px;">
			<div class="row">
				<div class="col-sm">
					<blockquote class="blockquote text-center">
						<h1 class="mb-0 display-3">XXX XXX XXX</h1>
						<footer class="blockquote-footer"><cite title="активных граждан">активных граждан</cite></footer>
					</blockquote>
				</div>
				<div class="col-sm">
					<blockquote class="blockquote text-center">
						<h1 class="mb-0 display-3">XXX XXX</h1>
						<footer class="blockquote-footer"><cite title="прошло голосований">прошло голосований</cite></footer>
					</blockquote>
				</div>
				<div class="col-sm">
					<blockquote class="blockquote text-center">
						<h1 class="mb-0 display-3">XXX XXX XXX</h1>
						<footer class="blockquote-footer"><cite title="принято мнений">принято мнений</cite></footer>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="border-block"><center><h1>Информационная система по выявлению лидеров общественного мнения</h1></center></div>

<div class="container-fluid border-block">
	<div class="card border-0">
		<div class="card-header border-0">
			<h3>Голосования</h3>
		</div>
		<div class="card-body">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">		
			<?php
				include("db.php");
				$sql=mysqli_query($db,"SELECT * FROM user INNER JOIN problems ON user.IDUser=problems.IDUser WHERE problems.Status=1 ORDER BY IDProblem DESC limit 4");
					//вывод строк из массива $data в таблицу
					while ($result=mysqli_fetch_array($sql)){
						echo'	<div class=col mb-3">
						<div >
							<img src="'.$result['Photo'].'" formaction="" class="card-img-top item-img" alt="...">
							<div class="card-body">';
								
								echo "<form  method='POST'>";
								echo '<h5 class="card-title">'.mb_strimwidth($result['Nameproblem'], 0, 63, "...").'</h5>';
								echo "<p class='card-text'>".mb_strimwidth($result['Description'], 0, 175, "...")."</p>";
								echo "<input type='hidden' name='hidden' value='".$result['IDProblem']."'>";
								echo "<input type='hidden' name='hidden2' value='".$result['Username']."'>";
								echo "<td><button type='submit' style='position: static; bottom: 0px;'class='btn btn-outline-secondary btn-block btn-block' formaction='ActualProblemsItem.php'  style='position: absolute; right: -5px; top: -15px;'>Подробнее</button></td>";
								echo "</form>";
				
						echo '</div>
					</div>
				</div>';
			
}
	echo 	'</div>
			<a type="button" class="btn btn-outline-secondary btn-lg btn-block border-button">Все голосования</a>
		</div>
	</div>
</div>';
?>



<div class="container-fluid border-block">
	<div class="card border-0">
		<div class="card-header border-0">
			<h3>Лидеры общественного мнения</h3>
		</div>
		<div class="card-body">
			<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5">
				<?php 
				include("db.php");
				$sql=mysqli_query($db,"SELECT * FROM user WHERE Reiting > 0");
				//вывод строк из массива $data в таблицу
				while ($result=mysqli_fetch_array($sql)){
				echo"<div class='col mb-2'>";
				echo	"<a href='PersonalAccount.php'>";
				echo		"<div class='card border-0'>";
				echo			"<center>";
				echo				"<img src='".$result['Photo']."' class='rounded-circle img-lider-opinion'>";
				echo				"<div class='card-body'>";
				echo					"<h5 class='card-title'>".$result['Lastname'].' '.$result['Firstname'].' '.$result['Fathername']."</h5>";
				echo					"<span class='badge badge-pill badge-info'>".$result['Reiting']." голосов</span>";
				echo				"</div>";
				echo			"</center>";
				echo		"</div>";
				echo	"</a>";
				echo "</div>";
				}
				?>
			</div>
			<a type="button" class="btn btn-outline-secondary btn-lg btn-block border-button">Все лидеры</a>
		</div>
	</div>
</div>

<div class="container-fluid border-block">
	<div class="card border-0">
		<div class="card-header border-0">
			<h3>Как мы изменили город</h3>
		</div>
		<div class="card-body">
			<div class="row row-cols-1 row-cols-sm-3 row-cols-md-5">
				<div class="card mb-3">
					<a href="#">
						<div class="card-header">Строительство</div>
						<div class="card-body text-secondary">
							<h5 class="card-title">Общегородской</h5>
							<p class="card-text">Строящийся южный дублер Кутузовского проспекта назвали в честь героя Отечественной войны 1812...</p>
						</div>
					</a>
				</div>
				<div class="card mb-3">
					<a href="#">
						<div class="card-header">Торговля и услуги</div>
						<div class="card-body text-secondary">
							<h5 class="card-title">Общегородской</h5>
							<p class="card-text">В ноябре 2019 года в районе Арбат по адресу: Большой Николопесковский переулок, владение 8...</p>
						</div>
					</a>
				</div>
				<div class="card mb-3">
					<a href="#">
						<div class="card-header">Транспорт</div>
						<div class="card-body text-secondary">
							<h5 class="card-title">Общегородской</h5>
							<p class="card-text">В ноябре 2019 года открылось движение по двум Московским центральным диаметрам: МЦД-1...</p>
						</div>
					</a>
				</div>
				<div class="card mb-3">
					<a href="#">
						<div class="card-header">Благоустройство</div>
						<div class="card-body text-secondary">
							<h5 class="card-title">ЮВАО</h5>
							<p class="card-text">Принято решение о благоустройстве спортивной площадки по адресу: Нахимовский проспект...</p>
						</div>
					</a>
				</div>
				<div class="card mb-3">
					<a href="#">
						<div class="card-header">Благоустройство</div>
						<div class="card-body text-secondary">
							<h5 class="card-title">ЮВАО</h5>
							<p class="card-text">Принято решение о благоустройстве детско-спортивной площадки по адресу: ул. Ташкентская...</p>
						</div>
					</a>
				</div>
			</div>
			<a type="button" class="btn btn-outline-secondary btn-lg btn-block border-button">Все результаты</a>
		</div>
	</div>
</div>

<footer>
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