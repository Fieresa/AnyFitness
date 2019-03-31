<?PHP
class Reservation{
	private $Id_reservation;
	private $Id_cour;
	private $Id_client;
	private $dates;
	function __construct($Id_reservation,$Id_cour,$Id_client,$dates){
		$this->Id_reservation=$Id_reservation;
		$this->Id_cour=$Id_cour;		
		$this->Id_client=$Id_client;
		$this->dates=$dates;
	}
	
	function getId_reservation(){
		return $this->Id_reservation;
	}
	function getId_cour(){
		return $this->Id_cour;
	}
	function getId_client(){
		return $this->Id_client;
	}
	function getdates(){
		return $this->dates;
	}

	function setId_reservation($Id_reservation){
		$this->Id_reservation;
	}
	function setId_cour($Id_cour){
		$this->Id_cour=$Id_cour;
	}
	function setId_client($Id_client){
		$this->Id_client=$Id_client;
	}
	function setdates($dates){
		$this->dates=$dates;
	}
	
}

?>