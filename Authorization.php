<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="images/gerb-icon.ico" type="image/x-icon">
	
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    <title>Авторизация пользователя</title>
</head>
<body>
<div class="contact-form" id="contact">
    <div class="container">
		<div class="card" style="margin: 40px 0 40px 0;">
			<div class="card-body">
        <form  method="POST" >
            <div class="row">
                <div class="col-sm-12">
					<h1>Авторизация пользователя</h1> 
                    <div class="form-group">
						<div class="form-group">
							<label for="login">Логин</label>
							<input type="text" class="form-control form-control-md" placeholder="Логин" name="login">
						</div>
						<div class="form-group">
							<label for="p">Пароль</label>
							<input type="password" class="form-control form-control-md" placeholder="Пароль" name="p">
						</div>
                        <div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
							<label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
						</div>
                    </div>
                             
                    <input type="submit" class="btn btn-outline-success btn-block" value="Вход" name="submit" formaction='login.php'>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
</div>
</body>
</html>