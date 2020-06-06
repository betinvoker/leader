<?php
include('Nav.php');
?>
<body>
<div class="container">
	<div class="card col-12 border-0"  style="margin: 110px 0 40px 0;">
		<div class="row row-cols-1 no-gutters">
			<div class="col col-md-4">
				<img src="<? echo $myrow['Photo'] ?>" class="img-lider-opinion" alt="...">
			</div>
			<div class="col col-md-8">
				<div class="card-body">
					<p class="card-title h1"><? echo $myrow['Lastname'].' '.$myrow['Firstname'].' '.$myrow['Fathername']; ?>
						<button type="button" class="btn btn-outline-secondaryo btn-sm">
							<img src="icons/gear.svg" alt="" style="margin: 6px 0 3px 0;" width="20" height="20" title="Редактировать профиль">
						</button>
					</p>
					<p class="card-text">Рейтинг: <? echo $Reiting; ?></p>
					<p class="card-text">Дата рождения: <? echo $myrow['BirstDate']; ?></p>
					<p class="card-text">Электронная почта: <? echo $myrow['EMail']; ?></p>
					<p class="card-text">Номер телефона: <? echo $myrow['Tel']; ?></p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="row row-cols-1 row-cols-sm-1"  style="margin: 0px 0 320px 0;">
		<div class="col">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Предложенные проблемы</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Мои решения</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Мои опросы</a>
				</li>
			</ul>
		</div>
		<div class="col">
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class= "row row-cols-1 row-cols-sm-2" style="margin: 20px 0 20px 0">
						<div class="col col-sm-12 col-md-8">
							<h1>Предложенные мной проблемы</h1>
						</div>
						<div class="col col-sm-12 col-md-4" style="margin-top: 10px">
							<form  method="POST">
								<input type="hidden" name="hidden" value="<? echo $myrow['IDUser'] ?>">
								<button type='submit' class='btn btn-success' formaction='Addproblem.php'>Предложить проблему</button>
							</form>
						</div>
					</div>
					<div class="card-deck">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
					<?php
						include("db.php");
					//Таблица с мероприятиями
						$sql=mysqli_query($db,"SELECT * FROM problems WHERE IDUser=$IDUser");					//вывод строк из массива $data в таблицу
						while ($result=mysqli_fetch_array($sql)){
						echo	"<div class='card'>";
						echo		"<img src='".$result['Photo']."' class='card-img-top'>";
						echo		"<div class='card-body'>";
						echo			"<h5 class='card-title'>".mb_strimwidth($result['Nameproblem'], 0, 23, "...")."</h5>";
						echo			"<p class='card-text'>".mb_strimwidth($result['Description'], 0, 100, "...")."</p>";
						echo 			"<form  action='ActualProblemsItem.php' method='POST'>";
						echo 				"<input type='hidden' name='hidden' value='".$result['IDProblem']."'>";
						echo 				"<button type='submit' class='btn btn-outline-info btn-sm btn-block' formaction='ActualProblemsItem.php' >Подробнее</button>";
						echo 			"</form>";
						echo		"</div>";
						echo		"<div class='card-footer'>";
						
							if ($result['Status']==0)	{	$status="В рассмотрении";	} 
							else if ($result['Status']==1)	{	$status="Подтвержден";	}
							else if ($result['Status']==2)	{	$status="Отклонен";	}
							else	{	$status="Закончен";	} 
							
						echo			"<small class='text-muted'>Статус проблемы: ".$status."</small>";
						echo			" <p class='card-text'><small class='text-muted'>Рейтинг: ".$result['Rating']."</small></p>";
						echo		"</div>";
						echo	"</div>";
						}

					?>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Мои решения</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class= "row row-cols-1 row-cols-sm-2" style="margin: 20px 0 10px 0">
						<div class="col col-sm-12">
							<h1>Добавить новый опрос</h1>
						</div>
					</div>
					<div class="card border-0">
						<form  method="POST" action="">            
							<div class="row">
								<div class="col-sm-6">
									<div class="card  border-0">
										<div class="card-body">
											<div class="form-group">
												<select name="thema" class="form-control form-control-md" >             
													<option value="Образование">Образование</option> 
													<option value="Культура">ЖКХ</option>                
													<option value="Культура">Культура</option>
													<option value="Культура">Здравоохранение</option>
													<option value="Спорт">Спорт</option>
													<option value="Досуг">Досуг</option>
													<option value="Другое">Другое</option>
												</select>
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-control-md" placeholder="Заголовок" name="header"> 
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-control-md" placeholder="Описание" name="comment"> 
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card  border-0">
										<div class="card-body">
											<div class="form-group">
												<input type="text" class="form-control form-control-md" placeholder="Текст вопроса 1" name="q1"> 
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-control-md" placeholder="Текст вопроса 2" name="q2">
											</div>
											<div class="form-group">
												<input type="text" class="form-control form-control-md" placeholder="Текст вопроса 3" name="q3"> 
											</div>
											<div class="form-group">			
												<input type="submit" class="btn btn-outline-success btn-block" value="Отправить" name="submit" > 	 
											</div>
										</div>
									</div>
								</div>
							</div>			
						</form>		  
					</div>
					<div class= "row row-cols-1 row-cols-sm-2" style="margin: 20px 0 20px 0">
						<div class="col col-sm-12">
							<h1>Мои опросы</h1>
						</div>
					</div>
					<?php
						//Новый опрос
						$thema=$_POST['thema'];
						$header=$_POST['header'];
						$comment=$_POST['comment'];
						$q1=$_POST['q1'];
						$q2=$_POST['q2'];
						$q3=$_POST['q3'];
						$d=date("Y/m/d");

						if (isset($_POST['header'])){
							$q="INSERT INTO Poll(Thema,Name,Comment,Q1,Q2,Q3,DateBegin,IDUser) VALUES (
								'$thema','$header','$comment','$q1','$q2','$q3','$d',$IDUser)";
    
							include("db.php");
							$sql=mysqli_query($db,$q) or die(mysqli_error());
							if($sql='TRUE')
							{
								// echo "Мероприятие успешно зарегистрировано! <script>window.location = 'PersonalAccount.php';</script>";
								echo "Ваша заявка отправлена на модерацию. После подтверждения Вам будет начислено 20 баллов. Спасибо за активность! <br>";
								//  <a href='PersonalAccount.php'> Вернуться в личный кабинет</a>";
							}
							else {
								echo "Ошибка ";
							}
						}
    
						//Таблица с мероприятиями
						echo "<table class='table table-sm'>
						<thead clasinfo'><tr ><th>ID опроса</th><th>Тема</th><th>Название</th>".
						"<th> Дата начала</th><th>Дата окончания</th><th>Статус</th><th>Просмотр</th><th>Завершить</th></tr></thead><tbody>";
						$sql=mysqli_query($db,"SELECT * FROM Poll WHERE IDUser=$IDUser");

						//вывод строк из массива $data в таблицу
						while ($result=mysqli_fetch_array($sql)){

						echo "<tr>";
						echo "<td>".$result['IDPoll']."</td>";
						echo "<td>".$result['Thema']."</td>";
						echo "<td>".$result['Name']."</td>";
						echo "<td>".$result['DateBegin']."</td>";
						echo "<td>".$result['DateEnd']."</td>";

						if ($result['Status']==0)	{	$status="В рассмотрении";	} 
						else if ($result['Status']==1)	{	$status="Подтвержден";	} 
						else if ($result['Status']==2)	{	$status="Отклонен";	}
						else	{	$status="Закончен";	 } 
    
						echo "<td>".$status."</td>";
						echo "<form  method='POST'>";
						echo "<input type='hidden' name='hidden' value='".$result['IDPoll']."'>";
						echo "<td><button type='submit' class='btn btn-success' formaction='Poll.php' >Обзор</button></td>";
						echo "<td><button type='submit' class='btn btn-success' formaction='del_meropr.php'>Закончить</button></td>";

						echo "</form>";
						echo "</tr>";
						}
						echo "</tbody></table></p>";

						?>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>