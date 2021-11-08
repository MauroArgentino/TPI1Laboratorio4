<?php 

/**
 * 
 */
class Usuario
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

}

?>