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

	/**
	 *Contructor que inicializa la conección con la base de datos
	 */
	function __construct() {
		$this->conn = new mysqli($this->servername, $this->username, $this->password,$this->database);
		if ($this->conn->connect_error) {
			die("Coneccion Fallada: " . $conn->connect_error);
		}
	}


	/**
	 *Obtiene los registros de un Usuario
	 * @param String $query
	 */
	public function Getquery($query) {
		$results_array = array();
		/* Consulta que obtiene los registros del Usuario */
		if ($results = $this->conn->query($query)) {

		    while ($row = $results->fetch_assoc()) {
		    	$results_array[] = $row;
		    }

		    return $results_array;

		    /* libera el conjunto de resultados */
		    $results->close();
		}
	}

	/**
	 * Agrega un nuevo Usuario en la tabla user
	 *
	 * @param string $firstName
	 * @param string $lastName
	 * @param string $dateOfbirth
	 * @param string $gender
	 * @param string $occupation
	 * @param string $email
	 * @param integer $phone
	 * @param integer $age
	 */
	public function Setquery($firstName,$lastName,$dateOfbirth,$gender,$occupation,$email,$phone,$age) {
		$stmt = $this->conn->prepare("INSERT INTO user(first_name,last_name,date_of_birth,gender,occupation,email,phone,age)  VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

		$stmt->bind_param('ssssssii',$firstName, $lastName, $dateOfbirth, $gender,$occupation,$email,$phone,$age);
		printf ("New Record has id %d.\n", $this->conn->insert_id);
		/*Ejecutamos el prepared statement */
		$stmt->execute();
	}
}

?>