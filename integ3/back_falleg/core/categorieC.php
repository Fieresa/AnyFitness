<?PHP
include "/config.php";
class CategorieC {
function afficherCategorie ($Categorie){
		echo "NoC: ".$Categorie->getNoC()."<br>";
		echo "NomC: ".$Categorie->getNomC()."<br>";
		echo "DescriptionC: ".$Categorie->getDescriptionC()."<br>";
		
	}
	function calculerSalaire($Categorie){
		echo $Categorie->getNbHeures() * $Categorie->getTarifHoraire();
	}
	function ajouterCategorie($Categorie){
		$sql="insert into Categorie (NoC,NomC,DescriptionC) values (:NoC, :NomC,:DescriptionC)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $NoC=$Categorie->getNoC();
        $NomC=$Categorie->getNomC();
        $DescriptionC=$Categorie->getDescriptionC();
 
		$req->bindValue(':NoC',$NoC);
		$req->bindValue(':NomC',$NomC);
		$req->bindValue(':DescriptionC',$DescriptionC);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCategories(){
		$sql="SElECT * From Categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($NoC){
		$sql="DELETE FROM Categorie where NoC= :NoC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':NoC',$NoC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($Categorie,$NoC){
		$sql="UPDATE Categorie SET NoC=:NoC1, NomC=:NomC,DescriptionC=:DescriptionC WHERE NoC=:NoC";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$NoC1=$Categorie->getNoC();
        $NomC=$Categorie->getNomC();
        $DescriptionC=$Categorie->getDescriptionC();
		$datas = array(':NoC1'=>$NoC1, ':NoC'=>$NoC, ':NomC'=>$NomC,':DescriptionC'=>$DescriptionC);
		$req->bindValue(':NoC1',$NoC1);
		$req->bindValue(':NoC',$NoC);
		$req->bindValue(':NomC',$NomC);
		$req->bindValue(':DescriptionC',$DescriptionC);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCategorie($NoC){
		$sql="SELECT * from Categorie where NoC=$NoC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategories($tarif){
		$sql="SELECT * from Categorie where tarifHoraire=$tarif";
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