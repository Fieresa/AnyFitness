<?PHP
include '../config.php';
class User{
	private $id_client;
	private $nom_client;
	private $prenom_client;
	public $conn;
	function __construct($id_client,$nom_client,$prenom_client,$conn){
		$this->id_client=$id_client;
		$this->nom_client=$nom_client;
		$this->prenom_client= $prenom_client;
		$c= new config();
		$this->conn=$c->getConnexion();
	}
	
	function getId_client(){
		return $this->id_client;
	}
	function getnom_client(){
		return $this->nom_client;
	}
	function getprenom_client(){
		return $this->prenom_client;
	}
		

	function setprenom_client($prenom_client){
		$this->prenom_client=$prenom_client;
	}
	function setId_client($id_client){
		$this->id_client;
	}
	function setnom_client($nom_client){
		$this->nom_client=$nom_client;
	}
	
	public function Logedin($conn,$nom_client,$prenom_client)
	{
		$req="SELECT * from client where nom_client='$nom_client' && prenom_client='$prenom_client'";
		$rep=$conn->query($req);
		return $rep;
	}
	
}

?>