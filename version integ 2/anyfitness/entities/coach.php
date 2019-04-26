<?PHP
class coach{
	private $Id_coach;
	private $nom;
	private $prenom;
	private $Path;
	function __construct($Id_coach,$nom,$prenom,$Path){
		$this->Id_coach=$Id_coach;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->Path=$Path;
	}
	
	function getId_coach(){
		return $this->Id_coach;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getPath(){
		return $this->Path;
	}

	function setId_coach($Id_coach){
		$this->Id_coach=$Id_coach;
	}
	function setnom($nom){
		$this->nom=$nom;
	}
	function setprenom($prenom){
		$this->prenom;
	}
	function setPath($Path){
		$this->Path=$Path;
	}
	
}


?>