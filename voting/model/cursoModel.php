<?php
interface plantilla_curso{
	public function get_opciones();
	public function votar($id_op);
}
 
class curso implements plantilla_curso{
	private $opciones;
	private $dbh;
	private $total;

	public function __construct(){
		$this->opciones=array();
		$this->dbh=new PDO('mysql:host=localhost;dbname=si_votingo','root','');
	}

	private function set_names()
	{
		$this->dbh->query("SET NAMES 'utf8'");
	}


	public function get_opciones()
	{
		self::set_names();
		$sql='select * from list_candidate where candidatetype_name="Personero" or candidatetype_name="Voto en blanco P"';
		$this->dbh->query($sql);
		foreach ($this->dbh->query($sql) as $row) {
			$this->opciones[]=$row;
		}
		return $this->opciones;
		$this->dbh=null;
	}


	
	public function votar($id_op)
	{
		$sql="update scrutinies set number_votes=number_votes+1 where id=?";
		$stmt=$this->dbh->prepare($sql);
		$stmt->bindParam(1,$id);
		$id=$id_op;

		$stmt->execute();
	}


}

?>