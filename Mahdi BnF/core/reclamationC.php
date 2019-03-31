<?PHP
include "../config.php";
class ReclamationC {
function afficherReclamation ($reclamation){
		echo "Id: ".$reclamation->getId()."<br>";
		echo "Id_client: ".$reclamation->getId_client()."<br>";
		echo "Type: ".$reclamation->getTyp()."<br>";
		echo "Content: ".$reclamation->getContent()."<br>";
		
	}
	
	function ajouterReclamation($reclamation){
		$sql="insert into reclamation (id,id_client,type,content) values (:id, :id_client, :type, :content)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$reclamation->getId();
        $id_client=$reclamation->getId_client();
        $type=$reclamation->getTyp();
        $content=$reclamation->getContent();
        
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':type',$type);
		$req->bindValue(':content',$content);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherReclamations(){
		//$sql="SElECT * From reclamation e inner join formationphp.reclamation a on e.id= a.id";
		$sql="SElECT * From reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($id){
		$sql="DELETE FROM reclamation where id= :id";
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
	function modifierReclamation($reclamation,$id){
		$sql="UPDATE reclamation SET id=:id, id_client=:id_client, type=:type, content=:content WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$reclamation->getId();
        $id_client=$reclamation->getId_client();
        $type=$reclamation->getTyp();
        $content=$reclamation->getContent();
		
		$datas = array(':id'=>$id, ':id_client'=>$id_client,':type'=>$type,':content'=>$content);
		$req->bindValue(':id',$id);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':type',$type);
		$req->bindValue(':content',$content);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($id){
		$sql="SELECT * from reclamation where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListereclamations($type){
		$sql="SELECT * from reclamation where type=$type";
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