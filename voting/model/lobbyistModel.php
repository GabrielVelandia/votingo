<?php
interface plantilla_lobbyist{
	public function get_lobbyist();
	public function votes($id_oppp);
}

class lobbyist implements plantilla_lobbyist{
	private $lobbyists;
	private $dbh;
	private $total;

	public function __construct(){
		$this->lobbyists=array();
		$this->dbh=new PDO('mysql:host=localhost;dbname=si_votingo','root','');
	}

	private function set_names()
	{
		$this->dbh->query("SET NAMES 'utf8'");
	}


	public function get_lobbyist()
	{
		self::set_names();
		$sql='select * from list_candidate where candidatetype_name="Cabildante" or candidatetype_name="Voto en blanco CB"';
		$this->dbh->query($sql);
		foreach ($this->dbh->query($sql) as $row) {
			$this->lobbyists[]=$row;
		}
		return $this->lobbyists;
		$this->dbh=null;
	}


	
	public function votes($id_oppp)
	{
		$sql="update scrutinies set number_votes=number_votes+1 where id=?";
		$sql2="update student_listing set status_idFK=5 where user_idfk=?";
		$stmt=$this->dbh->prepare($sql);
		$stmt->bindParam(1,$id);
		$stmt2=$this->dbh->prepare($sql2);
		$stmt2->bindParam(5,$user_idfk);
		$id=$id_oppp;
		$user_idfk=$userid;

		$stmt->execute();
		$stmt2->execute();
	}


}

?>