<?PHP
class coach{
	private $Id_coach;
	private $nom;
	private $prenom;
	private $Tel;
	function __construct($Id_coach,$nom,$prenom,$Tel){
		$this->Id_coach=$Id_coach;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->Tel=$Tel;
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
	function getTel(){
		return $this->Tel;
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
	function setTel($Tel){
		$this->Tel=$Tel;
	}
	
}


?>