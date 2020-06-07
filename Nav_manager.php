<?php
session_start();
$Username=$_SESSION['UsernameM'];
$IDUser=$_SESSION['IDUserM'];

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет </title>
	
	<link rel="shortcut icon" href="images/gerb-icon.ico" type="image/x-icon">
	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
 <?php
include('db.php');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
	<a class="navbar-brand" href="index.php">
		<img src="images/gerb-logo.png" alt="Информационная система по выявлению лидеров общественного мнения">
    </a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Главная</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="manager.php">Опросы</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Проекты</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Вопросы</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Рейтинг</a>
				</li>
			
			</ul>
			<form class="form-inline my-2 my-lg-0">
		
				<a href="index.php">
					<img src="icons/person.svg" alt="" width="23" height="23" title="Bootstrap">
					<font style="vertical-align: inherit;">Выход</font>
				</a>
			</form>
		</div>
	</nav>


   

<div class ="profile" style="margin-top: 100px;">
	<div class="header">
		<div class="container-fluid"> 
			<div class="row">
			</div>
		</div>
	</div>
</div>