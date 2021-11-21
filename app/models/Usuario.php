<?php 

/**
 * 
 */
class Usuario extends Model
{
	private $db;

	function __construct()
	{
		$this->db = new Base;
		//return $this->db->getError();
		
	}

	public function getAll()
	{
		$this->db->query("SELECT * FROM usuarios");
		return $this->db->registers();
	}

	public function getError()
	{
		return $this->db->getError();
	}

	// public function createUser($username, $nombre, $apellido, $email, $pass)
	// {
	// 	try {
	// 		$this->db->query("INSERT INTO usuarios (username, nombre, apellido, email, password) VALUES (?, ?, ?, ?, ?)");
	// 		$this->db->bindValue()
	// 		$this->db->execute();
	// 	} catch (PDOException $e) {
	// 		echo $e->getMessage();
	// 	}
		
	// }

	public function createUser($datos)
	{
		try {
			$this->db->query("INSERT INTO usuarios (username, nombre, apellido, email, password) VALUES (:username, :nombre, :apellido, :email, :password)");
			$this->db->bind(":username", $datos["username"]);
			$this->db->bind(":nombre", $datos["nombre"]);
			$this->db->bind(":apellido", $datos["apellido"]);
			$this->db->bind(":email", $datos["email"]);
			$this->db->bind(":password", password_hash($datos["password"], PASSWORD_DEFAULT));
			return $this->db->execute();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}

	public function updateUser($datos)
	{
		try {
			// $this->db->query("UPDATE usuarios SET username = :username, nombre = :nombre, apellido = :apellido, password = :password
			// 	WHERE email = :email;");
			
			if (!empty($datos->password)){
				$this->db->query("UPDATE usuarios SET username = :username, nombre = :nombre, apellido = :apellido, password = :password, telefono = :telefono WHERE email = :email;");
				$this->db->bind(":password", password_hash($datos["password"], PASSWORD_DEFAULT));
				die();
			} else {
				$this->db->query("UPDATE usuarios SET username = :username, nombre = :nombre, apellido = :apellido, telefono = :telefono WHERE email = :email;");
			}
			$this->db->bind(":username", $datos["username"]);
			$this->db->bind(":nombre", $datos["nombre"]);
			$this->db->bind(":apellido", $datos["apellido"]);
			$this->db->bind(":telefono", $datos["telefono"]);
			$this->db->bind(":email", $datos["email"]);
			return $this->db->execute();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}

	public function getUser($email)
	{
		$this->db->query("SELECT * FROM usuarios WHERE email = :email");
		$this->db->bind(":email", $email);
		return $this->db->register();
	}

}

?>