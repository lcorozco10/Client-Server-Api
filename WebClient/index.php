<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"><!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<title>Ejercicio</title>
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-md-3"></div>
  		<div class="col-md-6">
			<form action="ver.php" method="post">
					<fieldset name="userform">
						<legend class="col-xs-12">Cliente Web</legend>
						<label class="col-xs-6">Buscar Usuario:</label>
						<input class="col-xs-6" type="text" name="search" placeholder="Buscar">
						
						<label class="col-xs-6">Por:</label>
						<div class="col-xs-6">
							<label class="col-xs-3">Nombre</label>
							<input class="col-xs-3" type="radio" checked="checked" value="name" name="by">
							<label class="col-xs-3">Edad</label>
							<input class="col-xs-3" type="radio" value="age" name="by">
						</div>

						<input hidden="" name="action" value="search">						
						<div class="col-xs-12"></div>
						<div class="col-xs-6"></div><input class="col-xs-6"  type="submit" value="Buscar">
					</fieldset>
			</form>
			<form action="ver.php" method="post">
					<fieldset name="userform">					

						<label class="col-xs-6">Genero:</label>
						<div class="col-xs-6">
							<label class="col-xs-3">M</label>
							<input class="col-xs-3" type="radio" checked="checked" value="Masculino" name="gender">
							<label class="col-xs-3">F</label>
							<input class="col-xs-3" type="radio" value="Femenino" name="gender">
						</div>

						

						<input hidden="" name="action" value="search">
						<input hidden="" name="by" value="gender">
						<div class="col-xs-12"></div>
						<div class="col-xs-6"></div><input class="col-xs-6"  type="submit" value="Buscar">
					</fieldset>
			</form>

  		</div>
  		<div class="col-md-3"></div>

	  </div>
	</div>
	

</body>
</html>

