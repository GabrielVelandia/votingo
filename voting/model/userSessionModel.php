<?php

/**
 * 
 */
class userSession
{
	private $idSession;
	
	public function __construct(){
		$this->opciones=array();
		$this->dbh=new PDO('mysql:host=localhost;dbname=si_votingo','root','');
	}

	private function set_names()
	{
		$this->dbh->query("SET NAMES 'utf8'");
	}

	public function getIduserSession($idUser)
	{
		$sql="update student_listing set status_idFK=5 where user_idfk=?";
		$stmt=$this->dbh->prepare($sql);
		$user_idfk=$idUser;
		$stmt->bindParam(5,$user_idfk);

		$stmt->execute();
	}
}

?>