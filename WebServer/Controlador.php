<?php
include 'Modelo.php';
/**
 * @author Luis Orozco----lcorozco10
 *
 */
class Controlador {
	// TODO - Insert your code here

	/**
	 */
	function __construct() {

		// TODO - Insert your code here
	}
}
if( !empty( $_POST ) ){

	$modelo = new Modelo();
	$modelo->Setquery($_POST["firstName"], $_POST["lastName"], $_POST["dateOfBirth"], $_POST["gender"], $_POST["ocupacion"],$_POST["email"], $_POST["phone"]);
	$modelo->Getquery("SELECT * FROM user LIMIT 10");
}
?>