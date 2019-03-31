<?PHP
class Cour{
	private $Id_cour;
	private $Id_coach;
	private $Id_backupcoach;
	private $Capacity;
	private $Duration;
	private $Heure;
	private $Jour;
	function __construct($Id_cour,$Id_coach,$Id_backupcoach,$Capacity,$Duration,$Heure,$Jour){
		$this->Id_cour=$Id_cour;
		$this->Id_coach=$Id_coach;
		$this->Id_backupcoach=$Id_backupcoach;
		$this->Capacity=$Capacity;
		$this->Duration=$Duration;
		$this->Heure=$Heure;
		$this->Jour=$Jour;
	}
	
	function getId_cour(){
		return $this->Id_cour;
	}
	function getId_coach(){
		return $this->Id_coach;
	}
	function getId_backupcoach(){
		return $this->Id_backupcoach;
	}
	function getDuration(){
		return $this->Duration;
	}
	function getCapacity(){
		return $this->Capacity;
	}
	function getJour(){
		return $this->Jour;
	}
	function getHeure(){
		return $this->Heure;
	}

	function setId_cour($Id_cour){
		$this->Id_cour=$Id_cour;
	}
	function setId_coach($Id_coach){
		$this->Id_coach=$Id_coach;
	}
	function setId_backupcoach($Id_backupcoach){
		$this->Id_backupcoach;
	}
	function setDuration($Duration){
		$this->Duration=$Duration;
	}
	function setCapacity($Capacity){
		$this->Capacity=$Capacity;
	}
	function setHeure($Heure){
		$this->Heure=$Heure;
	}
	function setJour($Jour){
		$this->Jour=$Jour;
	}
	
}

?>