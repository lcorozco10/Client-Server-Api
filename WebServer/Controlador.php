<?php
include 'Modelo.php';
/**
 * @author Luis Orozco----lcorozco10
 *
 */
class Controlador {
	/**
	 */
	function __construct() {

	}
}
if( !empty( $_POST ) ){
	if($_POST["accion"] == "Guardar")
	{
		$modelo = new Modelo();
		$modelo->Setquery($_POST["firstName"], $_POST["lastName"], $_POST["dateOfBirth"], $_POST["gender"], $_POST["ocupacion"],$_POST["email"], $_POST["phone"]);
		header("Location:index.php");

	}
}
if( !empty( $_GET ) ){
	if($_GET["accion"]== "Obtener")
	{
		header('Content-type: application/json');
		$modelo = new Modelo();
		$modelo->Getquery("SELECT * FROM user LIMIT 10");
	}
}
?>