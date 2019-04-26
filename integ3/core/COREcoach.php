<?PHP
include "../config.php";
class coachC {
function affichercoach ($coach){
		echo "Id_coach: ".$coach->getId_coach()."<br>";
		echo "prenom: ".$coach->getprenom()."<br>";
		echo "nom: ".$coach->getnom()."<br>";
		echo "Path: ".$coach->getPath()."<br>";
	}
	function calculerSalaire($coach){
		echo 10 * 10;
	}
	function ajoutercoach($coach){
		$sql="insert into coach (Id_coach,prenom,nom,Path) values (:Id_coach,:prenom,:nom,:Path)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id_coach=$coach->getId_coach();
        $prenom=$coach->getprenom();
        $nom=$coach->getnom();
        $Path=$coach->getPath();
		$req->bindValue(':Id_coach',$Id_coach);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':Path',$Path);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercoachs(){
		//$sql="SElECT * From coach e inner join formationphp.coach a on e.Id_coach= a.Id_coach";
		$sql="SElECT * From coach";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercoach($Id_coach){
		$sql="DELETE FROM coach where Id_coach= :Id_coach";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_coach',$Id_coach);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercoach($coach,$Id_coach){
		$sql="UPDATE coach SET Id_coach=:Id_coach,prenom=:prenom,nom=:nom,Path=:Path WHERE Id_coach=:Id_coach";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Id_coachn=$coach->getId_coach();
        $prenom=$coach->getprenom();
        $nom=$coach->getnom();
        $Path=$coach->getPath();
		$datas = array(':Id_coach'=>$Id_coach, ':Path'=>$Path, ':prenom'=>$prenom);
		$req->bindValue(':Id_coach',$Id_coach);
		$req->bindValue(':Path',$Path);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nom',$nom);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercoach($Id_coach){
		$sql="SELECT * from coach where Id_coach=$Id_coach";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecoach($Id_cour){
		$sql="SELECT * from coach where Id_coach like '%$Id_cour%' or prenom like '%$Id_cour%' or nom like '%$Id_cour%' or Path like '%$Id_cour%'";
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

?>