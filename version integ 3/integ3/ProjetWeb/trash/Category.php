<?PHP
include "../config.php";
class Category {
function afficherCategory ($category){
		echo "Username: ".$category->getUsername()."<br>";
		echo "Role: ".$category->getRole()."<br>";
	}
	function ajouterCategory($category){
		$sql="insert into user (username,role) values (:username,:role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $username=$category->getUsername();
        $role=$category->getRole();
		$req->bindValue(':username',$username);
		$req->bindValue(':role',$role);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherCategory(){
		$sql="SElECT * From category";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategory($username){
		$sql="DELETE FROM category where username=:username";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':username',$username);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    function modifierRole($category,$username1){
		$sql="UPDATE category SET role=:role, WHERE username=:username";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $role=$category->getRole();
		$datas = array(':username'=>$username1, ':role'=>$role);
		$req->bindValue(':username',$username1);
		$req->bindValue(':role',$role);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
    
}

?>