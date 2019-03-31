<?PHP
include "../config.php";
class AvisC {

function afficherAvis ($avis){
		echo "ID: ".$avis->getId()."<br>";
		echo "ID_Client: ".$avis->getId_client()."<br>";
		echo "Evaluation: ".$avis->getEvaluation()."<br>";
		
	}
	
	
	function ajouterAvis($avis){
		$sql="insert into avis (id,id_client,evaluation) values (:id, :id_client,:evaluation)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$avis->getId();
        $id_client=$avis->getId_client();
        $evaluation=$avis->getEvaluation();
        
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':evaluation',$evaluation);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficheravis1(){
		//$sql="SElECT * From avis e inner join formationphp.avis a on e.id= a.id";
		$sql="SElECT * From avis";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerAvis($id){
		$sql="DELETE FROM avis where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierAvis($avis,$id){
		$sql="UPDATE avis SET id=:id, id_client=:id_client,evaluation=:evaluation WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$avis->getId();
        $id_client=$avis->getId_client();
        $evaluation=$avis->getEvaluation();
        
		$datas = array(':id'=>$id, ':id_client'=>$id_client,':evaluation'=>$evaluation);
		
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':evaluation',$evaluation);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererAvis($id){
		$sql="SELECT * from avis where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeaviss($evaluation){
		$sql="SELECT * from avis where evaluation=$evaluation";
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