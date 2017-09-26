<!DOCTYPE html>
<html>
<head>
	<title>
		Registration?
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body class="bg-info">




<div class="row">
	<div class="formu  text-center  my-5 mx-auto">
		<h1 class="text-white">Sign Up ?</h1>
		<form action="" method="post">
			<label>Pseudo :</label>
			<input type="text" name="pseudo" placeholder="Pseudo">
			<label>Password :</label>
			<input type="password" name="password" placeholder="password">
			<label>Repeat Password :</label>
			<input type="password" name="password" placeholder="repeat password">
			<label>Email :</label>
			<input type="text" name="email" placeholder="Email">

			<input type="submit" value="send" class="my-3" name="button_inscription">
		</form>
	</div>
</div>

<div>
	<?php 
	print_r($_POST);
	
		$req=connexion_sql()->exec('SELECT * FROM user ');
		$test= $req->fetch();
		echo $test;
		
	 ?>


</div>



</body>
<!-- JS bootstrap 4: -->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<!-- JS bootstrap 4: -->
</html>