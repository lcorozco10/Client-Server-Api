<?php
include 'Modelo.php';
/**
 * @author Luis Orozco----lcorozco10
 *
 */
if( !empty( $_POST ) ){
	if($_POST["accion"] == "Guardar")
	{
		$modelo = new Modelo();
		$modelo->Setquery($_POST["firstName"], $_POST["lastName"], $_POST["dateOfBirth"], $_POST["gender"], $_POST["ocupacion"],$_POST["email"], $_POST["phone"],$_POST["age"]);
		//header("Location:index.php");
	}
}

if( !empty( $_GET ) ){
	if($_GET["accion"] == "obtener")
	{
		$query = "SELECT * FROM bdexercise.user where ";

		if ($_GET["by"] == "name"):
			$by = "first_name like '%N%'" ;
		elseif ($_GET["by"] == "gender"):
			$by = "gender = 'Masculino'";
		elseif ($_GET["by"] == "age"):
			$by = "age = '18'";
		endif;

		header('Content-type: application/json');
		$modelo = new Modelo();
		echo json_encode($modelo->Getquery($query.$by));
	}
}
?>