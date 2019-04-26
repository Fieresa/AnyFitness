<?PHP
include "config.php";
class ProduitC 
{
	############################################################
	############################################################

	function afficherproduit ($produit){
		echo "id: ".$produit->getid()."<br>";
		echo "nom: ".$produit->getnom()."<br>";
		echo "prix: ".$produit->getprix()."<br>";
		echo "categorie: ".$produit->getcategorie()."<br>";
		echo "Qt: ".$produit->getQt()."<br>";
		
	}
	############################################################
	############################################################
	
	function ajouterproduit($produit){
		$sql="insert into produit (id,nom,prix,categorie,Qt,folder) values (:id,:nom,:prix,:categorie,:Qt,:folder)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$produit->getid();
        $nom=$produit->getnom();
        $prix=$produit->getprix();
        $categorie=$produit->getcategorie();
		$Qt=$produit->getQt();
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "Product/".$filename ;
		move_uploaded_file($tempname,$folder);
        $req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':Qt',$Qt);
		$req->bindValue(':folder',$folder);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	
	}
	############################################################
	############################################################

	function afficherproduits(){
		//$sql="SElECT * From produit e inner join formationphp.produit a on e.id= a.id";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	############################################################
	############################################################

	function supprimerproduit($id){
		$sql="DELETE FROM produit where id= :id";
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
	############################################################
	############################################################
		

	function modifierproduit($produit,$id){
		$sql="UPDATE produit SET id=:idd , prix=:prix , Qt=:Qt WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$produit->getid();
        $prix=$produit->getprix();
		$Qt=$produit->getQt();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':prix'=>$prix , ':Qt'=>$Qt);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':Qt',$Qt);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererproduit($id){
		$sql="SELECT * from produit where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeproduits($id){
		$sql="SELECT * from produit where id=$id";
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