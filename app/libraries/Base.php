<?php

/**
 * 
 */
class Base
{
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $dbh;
	private $stmt;
	private $error;

	function __construct()
	{
		$dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
		$options = array(
			PDO::ATTR_PERSISTENT => true ,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION 
		);

		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
			$this->dbh->exec('set names utf8');
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
		}
	}

	public function query($sql)
	{
		$this->stmt = $this->dbh->prepare($sql);
	}

	public function bind($parameter, $value, $type = null)
	{
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
					break;
			}
		}
		$this->stmt->bindValue($parameter, $value, $type);
	}

	public function execute()
	{
		return $this->stmt->execute();
	}

	public function registers()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function register()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}

	public function rowCount()
	{
		return $this->stmt->rowCount();
	}

	public function getError()
	{
		return $this->error;
	}
}
?>