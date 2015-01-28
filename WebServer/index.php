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
			<form action="Controlador.php" method="post">
					<fieldset name="userform">
						<legend class="col-xs-12">Ejercicio Registro de Usuario</legend>
						<label class="col-xs-6">Nombre:</label>
						<input class="col-xs-6" type="text" name="firstName" placeholder="Nombre" required="required">
						<label class="col-xs-6">Apellido:</label>
						<input class="col-xs-6" type="text" name="lastName" placeholder="Apellido" required="required">
						<label class="col-xs-6">Fecha de Nac:</label>
						<input class="col-xs-6" type="text" name="dateOfBirth" placeholder="formato 2015-12-16" required="required">

						<label class="col-xs-6">Genero:</label>
						<div class="col-xs-6">
							<label class="col-xs-3">M</label>
							<input class="col-xs-3" type="radio" checked="checked" value="Masculino" name="gender">
							<label class="col-xs-3">F</label>
							<input class="col-xs-3" type="radio" value="Femenino" name="gender">
						</div>

						<label class="col-xs-6">Ocupacion:</label>
						<input class="col-xs-6" type="text" name="ocupacion" placeholder="Ocupacion" required="required">
						<label class="col-xs-6">Email:</label>
						<input class="col-xs-6" type="text" name="email" placeholder="Email" required="required">
						<label class="col-xs-6">Phone:</label>
						<input class="col-xs-6" type="text" name="phone" placeholder="Phone" required="required">




						<label class="col-xs-6">Edad:</label>
						<input class="col-xs-6" type="text" name="age" placeholder="Edad" required="required">
						<!-- <label class="col-xs-6"></label>
						<input class="col-xs-6" type="text" name="phone[]" placeholder="Phone"> -->

						<input hidden="" name="action" value="save">
						<div class="col-xs-12"></div>
						<div class="col-xs-6"></div><input class="col-xs-6"  type="submit" value="Guardar">
					</fieldset>
			</form>
  		</div>
  		<div class="col-md-3"></div>
	  </div>
	</div>
</body>
</html>

