<?PHP

class Avis{
	private $id;
	private $id_client;
	private $evaluation;
	
	function __construct($id,$id_client,$evaluation){
		$this->id=$id;
		$this->id_client=$id_client;
		$this->evaluation=$evaluation;
	}
	
	function getId(){
		return $this->id;
	}
	function getId_client(){
		return $this->id_client;
	}
	function getEvaluation(){
		return $this->evaluation;
	}
	

	function setId($id){
		$this->id=$id;
	}
	function setId_client($id_client){
		$this->id_client;
	}
	function setEvaluation($evaluation){
		$this->evaluation=$evaluation;
	}
	
	
}

?>