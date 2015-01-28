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

</body>
</html>
