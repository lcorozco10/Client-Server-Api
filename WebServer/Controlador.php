<?php
include 'Modelo.php';
/**
 * @author Luis Orozco----lcorozco10
 *
 */

/*
 *Guarda el contenido del formulario en la base de datos
 */
if( !empty( $_POST ) ){
	if($_POST["action"] == "save")
	{
		$modelo = new Modelo();
		$modelo->Setquery($_POST["firstName"], $_POST["lastName"], $_POST["dateOfBirth"], $_POST["gender"], $_POST["ocupacion"],$_POST["email"], $_POST["phone"],$_POST["age"]);
		header("Location:index.php");
	}
}

/*
 *Obtiene los registros segun el tipo de consulta
 *con el metodo get
 */
if( !empty( $_GET )){
	//verifica la acccion a realizar
	if($_GET["action"] == "get")
	{
		$query = "SELECT * FROM user where "; //Consulta

		if ($_GET["by"] == "name"):
			$by = "first_name like '%".$_GET["value"]."%'" ;//concatena el valor a la consulta
		elseif ($_GET["by"] == "gender"):
			$by = "gender = '".$_GET["value"]."'";//concatena el valor a la consulta
		elseif ($_GET["by"] == "age"):
			$by = "age = '".$_GET["value"]."'";//concatena el valor a la consulta
		endif;

		header('Content-type: application/json');
		$modelo = new Modelo();
		echo json_encode($modelo->Getquery($query.$by));//ejecuta la consulta e imprime un Json
	}
}
?>