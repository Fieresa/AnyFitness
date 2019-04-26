<?PHP

class Reclamation {
	private $id;
	private $id_client;
	private $content;
    private $type;

	
	function __construct($id,$id_client,$type,$content){
		$this->id=$id;
		$this->id_client=$id_client;
		$this->content=$content;
		$this->type=$type;

	}
	
	function getId(){
		return $this->id;
	}
	function getId_client(){
		return $this->id_client;
	}
	function getContent(){
		return $this->content;
	}
	function getTyp(){
		return $this->type;
	}

	function setId($id){
		$this->id=$id;
	}
	function setId_client($id_client){
		$this->id_client;
	}
	function setContent($content){
		$this->content=$content;
	}
	function setTyp($type){
		$this->type=$type;
	}
	
}

?>