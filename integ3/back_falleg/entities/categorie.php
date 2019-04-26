<?PHP
class Categorie{
	private $NoC;
	private $NomC;
	private $DescriptionC;
	
	function __construct($NoC,$NomC,$DescriptionC){
		$this->NoC=$NoC;
		$this->NomC=$NomC;
		$this->DescriptionC=$DescriptionC;
	}
	
	function getNoC(){
		return $this->NoC;
	}
	function getNomC(){
		return $this->NomC;
	}
	function getDescriptionC(){
		return $this->DescriptionC;
	}


	function setNomC($NomC){
		$this->NomC=$NomC;
	}
	function setNoC($NoC){
		$this->NoC=$NoC;
	}
	function setDescriptionC($DescriptionC){
		$this->DescriptionC;
	}

	
}

?>