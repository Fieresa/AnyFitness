<?PHP
class Category{
	private $username;
	private $role;
	function __construct($username,$role){
		$this->username=$username;
		$this->role=$role;
	}
	
	function getUsername(){
		return $this->username;
	}
	function getRole(){
		return $this->role;
	}
    }
    function setUsername($username){
		$this->username=$username;
	}
	function setRole($role){
		$this->role=$role;
	}
}

?>