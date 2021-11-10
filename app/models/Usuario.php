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

	public function createUser($username, $nombre, $apellido, $email, $pass)
	{
		try {
			$this->db->query("INSERT INTO usuarios (username, nombre, apellido, email, password) VALUES (?, ?, ?, ?, ?)");
			$this->db->bindValue()
			$this->db->execute();
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
		
	}

}

?>