<?PHP
include "../config.php";
class courC {
function affichercour ($cour){
		echo "Id_cour: ".$cour->getId_cour()."<br>";
		echo "Id_coach: ".$cour->getId_coach()."<br>";
		echo "Id_backupcoach: ".$cour->getId_backupcoach()."<br>";
		echo "Capacity: ".$cour->getCapacity()."<br>";
		echo "Duration: ".$cour->getDuration()."<br>";
		echo "Heure: ".$cour->getHeure()."<br>";
		echo "Jour: ".$cour->getJour()."<br>";
	}
	function calculerSalaire($cour){
		echo $cour->getDuration() * $cour->getCapacity();
	}
	function ajoutercour($cour){
		$sql="insert into cour (Id_coach,Id_cour,Id_backupcoach,Capacity,Duration,Heure,Jour) values (:Id_coach, :Id_cour,:Id_backupcoach,:Capacity,:Duration,:Heure,:Jour)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$Id_cour=$cour->getId_cour();
        $Id_coach=$cour->getId_coach();
        $Id_backupcoach=$cour->getId_backupcoach();
		$Capacity=$cour->getCapacity();
		$Duration=$cour->getDuration();
		$Heure=$cour->getHeure();
		$Jour=$cour->getJour();
		$req->bindValue(':Id_coach',$Id_coach);
		$req->bindValue(':Id_cour',$Id_cour);
		$req->bindValue(':Id_backupcoach',$Id_backupcoach);
		$req->bindValue(':Capacity',$Capacity);
		$req->bindValue(':Duration',$Duration);
		$req->bindValue(':Heure',$Heure);
		$req->bindValue(':Jour',$Jour);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercours(){
		//$sql="SElECT * From cour e inner join formationphp.cour a on e.Id_coach= a.Id_coach";
		$sql="SElECT * From cour";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercour($Id_cour){
		$sql="DELETE FROM cour where Id_cour= :Id_cour";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_cour',$Id_cour);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercour($cour,$Id_cour){
		$sql="UPDATE cour SET Id_cour=:Id_cour,Id_coach=:Id_coach, Id_backupcoach=:Id_backupcoach,Capacity=:Capacity,Duration=:Duration,Heure=:Heure,Jour=:Jour WHERE Id_cour=:Id_cour";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Id_cour=$cour->getId_cour();
		$Id_coach=$cour->getId_coach();
        $Id_backupcoach=$cour->getId_backupcoach();
		$Capacity=$cour->getCapacity();
		$Duration=$cour->getDuration();
		$Heure=$cour->getHeure();
		$Jour=$cour->getJour();
		$datas = array(':Id_coach'=>$Id_coach, ':Id_backupcoach'=>$Id_backupcoach, ':Id_cour'=>$Id_cour);
		$req->bindValue(':Id_cour',$Id_cour);
		$req->bindValue(':Id_coach',$Id_coach);
		$req->bindValue(':Id_backupcoach',$Id_backupcoach);
		$req->bindValue(':Capacity',$Capacity);
		$req->bindValue(':Duration',$Duration);
		$req->bindValue(':Heure',$Heure);
		$req->bindValue(':Jour',$Jour);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercour($Id_cour){
		$sql="SELECT * from cour where Id_cour=$Id_cour";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListecour($Id_cour){
		$sql="SELECT * from cour where Id_cour like '%$Id_cour%' or Id_coach like '%$Id_cour%' or Id_backupcoach like '%$Id_cour%' or Capacity like '%$Id_cour%' or Duration like '%$Id_cour%' or Heure like '%$Id_cour%' or Jour like '%$Id_cour%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function tricours(){
		//$sql="SElECT * From cour e inner join formationphp.cour a on e.Id_coach= a.Id_coach";
		$sql="SElECT * From cour ORDER BY Jour";
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