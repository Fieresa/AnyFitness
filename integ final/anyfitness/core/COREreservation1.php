<?PHP
include "../config.php";
class reservationC {
function afficherReservation ($reservation){
		echo "Id_reservation: ".$reservation->getId_reservation()."<br>";
		echo "Id_cour: ".$reservation->getId_cour()."<br>";
		echo "Id_client: ".$reservation->getId_client()."<br>";
	}
	function calculerSalaire($reservation){
		echo 10 * 10;
	}
	function ajouterreservation($reservation){
		$sql="insert into reservation (Id_reservation,Id_cour,Id_client) values (:Id_reservation, :Id_cour,:Id_client)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Id_reservation=$reservation->getId_reservation();
        $Id_cour=$reservation->getId_cour();
        $Id_client=$reservation->getId_client();
		$req->bindValue(':Id_reservation',$Id_reservation);
		$req->bindValue(':Id_cour',$Id_cour);
		$req->bindValue(':Id_client',$Id_client);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherreservations(){
		//$sql="SElECT * From reservation e inner join formationphp.reservation a on e.Id_reservation= a.Id_reservation";
		$sql="SElECT * From reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerreservation($Id_reservation){
		$sql="DELETE FROM reservation where Id_reservation= :Id_reservation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Id_reservation',$Id_reservation);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierreservation($reservation,$Id_reservation){
		$sql="UPDATE reservation SET Id_reservation=:Id_reservation, Id_cour=:Id_cour,Id_client=:Id_client WHERE Id_reservation=:Id_reservation";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Id_reservationn=$reservation->getId_reservation();
        $Id_cour=$reservation->getId_cour();
        $Id_client=$reservation->getId_client();
		$datas = array(':Id_reservation'=>$Id_reservation, ':Id_cour'=>$Id_cour, ':Id_client'=>$Id_client);
		$req->bindValue(':Id_reservation',$Id_reservation);
		$req->bindValue(':Id_cour',$Id_cour);
		$req->bindValue(':Id_client',$Id_client);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererreservation($Id_reservation){
		$sql="SELECT * from reservation where Id_reservation=$Id_reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListereservation($Id_cour){
		$sql="SELECT * from reservation where Id_cour like '%$Id_cour%' or Id_reservation like '%$Id_cour%' or Id_client like '%$Id_cour%'  ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function trireservations(){
		//$sql="SElECT * From reservation e inner join formationphp.reservation a on e.Id_reservation= a.Id_reservation";
		$sql="SElECT * From reservation ORDER BY Id_cour";
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