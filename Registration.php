<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="images/gerb-icon.ico" type="image/x-icon">
	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Регистрация пользователя</title>
</head>
<body>
<div class="contact-form" id="contact">
    <div class="container">
		<div class="card" style="margin: 40px 0 40px 0;">
			<div class="card-body">
				<form  method="POST" >
					<div class="row">
						<div class="col-sm-12">
							<h1>Регистрация</h1>
							<div class="form-group">
								<label for="user_name">Логин</label>
								<input type="text" class="form-control form-control-md" placeholder="Логин" name="user_name">
							</div>
							<div class="form-group">
								<label for="p1">Пароль</label>
								<input type="password" class="form-control form-control-md" placeholder="Пароль" name="p1">
							</div>
							<div class="form-group">
								<label for="lastname">Фамилия</label>
								<input type="text" class="form-control form-control-md" placeholder="Фамилия" name="lastname">
							</div>	
							<div class="form-group">
								<label for="firstname">Имя</label>
								<input type="text" class="form-control form-control-md" placeholder="Имя" name="firstname">
							</div> 
							<div class="form-group"> 
								<label for="tel">Выберите статус</label>
								<select name="status" value="Студент" class="form-control form-control-md">
									<option value="Студент">Студент</option>
									<option value="Школьник">Школьник</option>
									<option value="Работаю">Работаю</option>
									<option value="Безработниый">Безработниый</option>
									<option value="Пенсионер">Пенсионер</option>
									<option value="Другое">Другое</option>
								</select>
							</div>
							<div class="form-group"> 
								<label for="email">Ваш электронный адрес</label>
								<input type="email" class="form-control form-control-md" placeholder="Email" name="email">
							</div>
							<div class="form-group">
								<label for="tel">Номер телефона</label>
								<input type="tel" class="form-control form-control-md" placeholder="Телефон" name="tel">
							</div>  
                 
							<input type="submit" class="btn btn-outline-success btn-block" value="Отправить" name="submit" formaction='NewUser.php'>
						</div>
					</div>
				</form>
			</div>
		</div>
    </div>
</div>
</body>
</html>