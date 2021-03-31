<?php
//sebelum query, load dulu library database-nya
include_once("libraries/Database.php");

class Model {
	function __construct()
	{
		$this->dbh = Database::getInstance();
	}


	function simpanData($nim,$nama,$email,$users,$pasw,$kotaAs)
	{
		$rs = $this->dbh->query("INSERT INTO mhs (nim,nama,email,users,pasw,kotaAs) VALUES ('".$nim."','".$nama."','".$email."','".$users."','".$pasw."','".$kotaAs."')");
	}

	function lihatData()
	{

		$rs = $this->dbh->query("SELECT * FROM mhs");
		return $rs;
	}

	function lihatDataDetail($id)
	{

		$rs = $this->dbh->query("SELECT * FROM mhs WHERE id=".$id);
		return $rs->fetch();// kalau hasil query hanya satu, gunakan method fetch() bawaan PDO
	}
	
	
}

?>