<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"><!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
</head>
<body>

<?php

if( !empty( $_POST ) ){
	//Verifica que ripo de accción realizar
	if($_POST["action"] == "search")
	{
		$json="";
		if($_POST["by"] == "name")
		{
			//Obtiene el contenido donde se encuentra el Recurso del Json
 			$content = file_get_contents("http://localhost/WebProyecto/WebServer/Controlador.php?action=get&by=name&value=".$_POST["search"]);  // add your url which contains json file
   			$json = json_decode($content, true);//Convierte el json a un Array PHP

		}
		else if($_POST["by"] == "age")
		{
			//Obtiene el contenido donde se encuentra el Recurso del Json
			$content = file_get_contents("http://localhost/WebProyecto/WebServer/Controlador.php?action=get&by=age&value=".$_POST["search"]);  // add your url which contains json file
   			$json = json_decode($content, true);//Convierte el json a un Array PHP
		}
		else if($_POST["by"] == "gender")
		{
			//Obtiene el contenido donde se encuentra el Recurso del Json
			$content = file_get_contents("http://localhost/WebProyecto/WebServer/Controlador.php?action=get&by=gender&value=".$_POST["gender"]);  // add your url which contains json file
   			$json = json_decode($content, true);//Convierte el json a un Array PHP
		}


		//Imprime el resultado de del contenido
		 $count = count($json);
		    echo'<table class="table table-bordered"><th>Nombre</th>
		    	<th>Apellido</th>
		    	<th>Fecha de Nac</th>
		    	<th>Genero</th>
		    	<th>Ocupacion</th>
		    	<th>Email</th>
		    	<th>Telefono</th>
		    	<th>Edad</th><tbody>';
		    //recorre el array y lo imprime en una tabla HTML
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

</body>
</html>
