<?php
session_start();
$IDUser=$_SESSION['IDUser'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Опрос</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/Style.css">
</head>
<body>
<?php

$IDPoll=$_POST['hidden'];

include('db.php');
$query="SELECT *,(CountQ1+CountQ2+CountQ3) AS Vsego  FROM Poll WHERE IDPoll=$IDPoll";

$result=mysqli_query($db,$query);
$myrow=mysqli_fetch_array($result);
$thema=$myrow['Thema'];
$header=$myrow['Name'];
$comment=$myrow['Comment'];
$q1=$myrow['Q1'];
$q2=$myrow['Q2'];
$q3=$myrow['Q3'];
$d=$myrow['DateBegin'];
$vsego=$myrow['Vsego'];
$count1=$myrow['CountQ1'];
$count2=$myrow['CountQ2'];
$count3=$myrow['CountQ3'];

?>    

<div class="contact-form" id="contact">
    <div class="container">
		<form  method="POST" action="InsPoll.php" >
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 left2" >
                    <h1>Новый опрос</h1> 
				</div>
                <div class="col-lg-8 col-md-8 col-sm-12 right">
                   <div class="form-group">
                   <?php   
						echo "<h2>Категория: ".$thema."</h2>";
						echo  "<h2>".$header."</h2>";    
						echo  "<h3>".$comment."</h3>";     
						echo "Дата начала: ".$d."<br>";
						echo "Количество ответов: ".$vsego."<br>";
						echo "<input type='hidden' name='hidden' value='".$IDPoll."'>";
						echo "<input type='hidden' name='hidden2' value='".$IDUser."'>";
					?>

						<div  data-toggle="buttons">
							<label class="btn btn-primary active">
								<input type="radio" name="options" value="Q1" id="option1" autocomplete="off" checked> 
								<?php echo $q1. " ($count1 ответов)"; ?>
							</label><br>
							<label class="btn btn-primary">
								<input type="radio" name="options"  value="Q2"  id="option2" autocomplete="off"> <?php echo $q2. " ($count2 ответов)"; ?>
							</label><br>
							<label class="btn btn-primary">
								<input type="radio" name="options"  value="Q3"  id="option3" autocomplete="off"> <?php echo $q3. " ($count3 ответов)"; ?>
							</label><br>
						</div>

						<input type="submit" class="btn btn-secondary btn-block" value="Отправить" name="submit" >  
					</div>
				</div>
			</div>
		</form> 
	</div>
</div> 

</body>
</html>