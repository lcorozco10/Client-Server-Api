<?php

/**
 * @author Luis Orozco
 *
 */
class Modelo {
	/**
	 * Variables de coneccion con el serviode MySql
	 */
	private $servername = "localhost";
	private $username = "root";
	private $password = "root";
	private $database = "bdexercise";
	private $conn;


	function __construct() {
		$this->conn = new mysqli($this->servername, $this->username, $this->password,$this->database);
		if ($this->conn->connect_error) {
			die("Coneccion Fallada: " . $conn->connect_error);
		}
		echo "Conectado";
	}

	public function Getquery($query) {
		$results_array = array();
		/* Consultas de selección que devuelven un conjunto de resultados */
		if ($resultado = $this->conn->query($query)) {

		    while ($row = $resultado->fetch_assoc()) {
		    	$results_array[] = $row;
		    }
		    echo json_encode($results_array);

		    /* libera el conjunto de resultados */
		    $resultado->close();
		}
	}

	public function Setquery($firstName,$lastName,$dateOfbirth,$gender,$occupation,$email,$id_phone) {
		$stmt = $this->conn->prepare("INSERT INTO user(first_name,last_name,date_of_birth,gender,occupation,email,id_phone)  VALUES (?, ?, ?, ?, ?, ?, ?)");

		$stmt->bind_param('ssssssi',$firstName, $lastName, $dateOfbirth, $gender,$occupation,$email,$id_phone);
		/*Ejecutamos el prepared statement */
		$stmt->execute();
	}
}

?>