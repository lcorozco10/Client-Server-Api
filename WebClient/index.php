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
						<input class="col-xs-6" type="text" name="search" placeholder="Buscar" >
						
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
  		<?php
if( !empty( $_POST ) ){
	if($_POST["action"] == "search")
	{
		$json="";
		if($_POST["by"] == "name")
		{
			
 			$content=file_get_contents("http://lcorozco10.koding.io/WebServer/Controlador.php?accion=obtener&by=name&value=".$_POST["search"]);  // add your url which contains json file
   			$json = json_decode($content, true);   


		}
		else if($_POST["by"] == "age")
		{
			$content=file_get_contents("http://lcorozco10.koding.io/WebServer/Controlador.php?accion=obtener&by=age&value=".$_POST["search"]);  // add your url which contains json file
   			$json = json_decode($content, true);
		}
		else if($_POST["by"] == "gender")
		{
			$content=file_get_contents("http://lcorozco10.koding.io/WebServer/Controlador.php?accion=obtener&by=gender&value=".$_POST["gender"]);  // add your url which contains json file
   			$json = json_decode($content, true);
		}


		 $count = count($json);
		    echo'<table class="table table-bordered"><th>Nombre</th>
		    	<th>Apellido</th>
		    	<th>Fecha de Nac</th>
		    	<th>Genero</th>
		    	<th>Ocupacion</th>
		    	<th>Email</th>
		    	<th>Telefono</th>
		    	<th>Edad</th><tbody>';
		    for($i=0;$i<$count;$i++)
		    {
		      echo'<tr><td>'.$json[$i]['first_name'].'</td><td>'.$json[$i]['last_name'].'</td><td>'.$json[$i]['date_of_birth'].
		      '</td><td>'.$json[$i]['gender'].'</td><td>'.$json[$i]['occupation'].'</td><td>'.$json[$i]['email'].
		      '</td><td>'.$json[$i]['phone'].'</td><td>'.$json[$i]['age'].'</td></tr>';
		    }		 
		   echo'</tbody></table>';

		
	}
}
?>
	  </div>
	</div>
	

</body>
</html>

