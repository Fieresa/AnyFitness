<?PHP
class code{
	private $num;
	private $montant;
	private $validite;
	private $dateajout;
	private $user;
	function __construct($num,$montant,$validite,$dateajout,$user){
		$this->num=$num;
		$this->montant=$montant;
		$this->validite=$validite;
		$this->dateajout=$dateajout;
		$this->user=$user;
	}
	
	function getnum(){
		return $this->num;
	}
	function getmontant(){
		return $this->montant;
	}
	function getvalidite(){
		return $this->validite;
	}
	function getdateajout(){
		return $this->dateajout;
	}
	function getuser(){
		return $this->user;
	}
	function setnum($num){
		$this->num=$num;
	}
	function setmontant($montant){
		$this->montant=$montant;
	}
	function setvalidite($validite){
		$this->validite=$validite;
	}
	function setdateajout($dateajout){
		$this->dateajout=$dateajout;
	}
	function setuser($user){
		$this->user=$user;
	}
}

?>