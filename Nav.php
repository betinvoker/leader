<?php
session_start();
$Username=$_SESSION['Username'];
$IDUser=$_SESSION['IDUser'];

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Личный кабинет</title>
	
	<link rel="shortcut icon" href="images/gerb-icon.ico" type="image/x-icon">
	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
 <?php
include('db.php');
$result=mysqli_query($db,"SELECT * FROM user WHERE IDUser=$IDUser");
$myrow=mysqli_fetch_array($result);
$Reiting=$myrow['Reiting'];
$Golos=$myrow['CountGolos'];
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a class="navbar-brand" href="#">
		<img src="images/gerb-logo.png" alt="Информационная система по выявлению лидеров общественного мнения">
    </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Мой профиль</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="PersonalAccount.php">Мои опросы</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Мои проекты</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Мои вопросы</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Мои поощрения</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="golos.php">Голосование</a>
			</li>
			
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<a href="PersonalAccount.php" style="padding-right:10pt">
				<img src="icons/person-square.svg" alt="" width="20" height="20" style="margin-bottom: 3px;">
				<label class="form-check-label" for="exampleCheck1"><?php echo $myrow['Lastname']." ".$myrow['Firstname'];?></label>
			</a>
			<a href="index.php">
				<img src="icons/x-octagon.svg" alt="" width="20" height="20" style="margin-bottom: 3px;">
				<label class="form-check-label" for="exampleCheck1">Выход</label>
			</a>
		</form>
	</div>
</nav>