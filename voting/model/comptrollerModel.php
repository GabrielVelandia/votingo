<?php
interface plantilla_contralor{
	public function get_contralor();
	public function vote($id_opp);
}

class comptroller implements plantilla_contralor{
	private $comptrollers;
	private $dbh;
	private $total;

	public function __construct(){
		$this->comptrollers=array();
		$this->dbh=new PDO('mysql:host=localhost;dbname=si_votingo','root','');
	}

	private function set_names()
	{
		$this->dbh->query("SET NAMES 'utf8'");
	}


	public function get_contralor()
	{
		self::set_names();
		$sql='select * from list_candidate where candidatetype_name="Contralor" or candidatetype_name="Voto en blanco C" ';
		$this->dbh->query($sql);
		foreach ($this->dbh->query($sql) as $row) {
			$this->comptrollers[]=$row;
		}
		return $this->comptrollers;
		$this->dbh=null;
	}


	
	public function vote($id_opp)
	{
		$sql="update scrutinies set number_votes=number_votes+1 where id=?";
		$stmt=$this->dbh->prepare($sql);
		$stmt->bindParam(1,$id);
		$id=$id_opp;

		$stmt->execute();
	}


}

?>