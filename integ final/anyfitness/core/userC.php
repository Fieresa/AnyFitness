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

	function rechercher($str){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
        $sql="    SElECT * from user where userid like '%$str%' or nom like '%$str%' or prenom like '%$str%' or email like '%$str%'";
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