<?PHP
include "../config.php";
class userC {
	function getUser(){
		//$sql="SElECT * From avis e inner join formationphp.avis a on e.id= a.id";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

}
