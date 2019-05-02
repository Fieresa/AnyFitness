    
<?PHP
include "../config.php";
class codec {
	function ajoutcode($code){
		$sql="insert into code (num,montant,validite,dateajout,user) values (:num,:montant,:validite,:dateajout,:user)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $num=$code->getnum();
        $montant=$code->getmontant();
        $validite=$code->getvalidite();
        $dateajout=$code->getdateajout();
        $user=$code->getuser();
		$req->bindValue(':num',$num);
		$req->bindValue(':montant',$montant);
		$req->bindValue(':validite',$validite);
		$req->bindValue(':dateajout',$dateajout);
		$req->bindValue(':user',$user);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recuperermail($ctr){
		$sql="SELECT email from user where userid=$ctr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function mailreservation($ctr){
		$sql="SELECT Heure,Jour,Capacity from cour where Id_cour=$ctr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function affichercode(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function affichercodep($ctr){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant From code where user=$ctr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimercode($num){
		$sql="DELETE FROM code where num= :num";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num',$num);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercode($code,$num){
		$sql="UPDATE code SET num=:num, montant=:montant,validite=:validite,dateajout=:dateajout,user=:user WHERE num=:num";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$num=$code->getnum();
        $montant=$code->getmontant();
        $validite=$code->getvalidite();
        $dateajout=$code->getdateajout();
        $user=$code->getuser();
		$datas = array(':num'=>$num, ':montant'=>$montant, ':validite'=>$validite,':dateajout'=>$dateajout
			,':user'=>$user);
		$req->bindValue(':num',$num);
		$req->bindValue(':montant',$montant);
		$req->bindValue(':validite',$validite);
		$req->bindValue(':dateajout',$dateajout);
		$req->bindValue(':user',$user);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function solde($str){
		$sql="select solde from user where userid=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function montant($str){
		$sql="select montant from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
function validite($str){
		$sql="select validite from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
function dateajout($str){
		$sql="select dateajout from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}	
	function modifiersolde($str,$ctr){
		$sql="UPDATE user SET solde=solde+$str WHERE userid=$ctr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function prixtotal($str){
		$sql="select (sum(quantite*prix)) as 'pt' from produit inner join commandes on produit=id where client=$str and paye=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function soldenouv($str){
		$sql="select (select solde from user where userid=$str)-(select (sum(quantite*prix)) as 'pt' from produit inner join commandes on produit=id where client=$str and paye=0) as 'sn' from dual";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiersolde2($str,$ctr){
		$sql="UPDATE user SET solde=$str WHERE userid=$ctr";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiercommandes($str){
		$sql="UPDATE commandes SET paye=1 WHERE client=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function affichercommandesp($str){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT numcmd,quantite,nom,prix,date,heure From commandes inner join produit on produit=id where client=$str and paye=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherclient($str){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT userid,nom,prenom from user where userid=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
function affichcode(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant,dateajout from code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}	
	function verif($str){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT count(*) as 'verif' from code where num=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
        function tri($str,$stc){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant,dateajout from code order by $str $stc";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function codeparmontant($str){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant,dateajout from code where montant=$str";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function codeutilises(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant,dateajout from code where validite=1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }	
    function codenonutilises(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT num,montant,dateajout from code where validite=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    	function cu(){
		$sql="	select (select count(*) from code where validite=1)/(select count(*) from code)*100 as'cp' from dual
";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function cnu(){
		$sql="	select (select count(*) from code where validite=0)/(select count(*) from code)*100 as'cp' from dual
";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function totalcu(){
		$sql="select sum(montant) as'tcp' from code where validite=1";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function totalcnu(){
		$sql="select sum(montant) as'tcp' from code where validite=0";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function top(){
		$sql="select client,c.nom nom,prenom,sum(quantite*prix) top from commandes inner join produit p on p.id=produit inner join user c on userid=client where paye=1 group by client order by top desc ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste; 
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function topmois($month,$year){
		$sql="select client,c.nom,prenom,sum(quantite*prix) top from commandes inner join produit p on p.id=produit inner join user c on userid=client where (extract(month from date)-$month=0) and (extract(year from date)-$year=0) and paye=1 group by client order by top desc ";
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
	/*function recuperercommandes($numcmd){
		$sql="SELECT * from commandes where numcmd=$numcmd";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	*/
	/*
	function recherchercommandes($str){
		$sql="select * from commandes where numcmd like '%"+$str+"%' or client like '%"+$str+"%' or produit like '%"+$str+"%' or prixu like '%"+$str+"%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function nextcommande(){
		$sql="select (max(numcmd)+1) as 'max' from commandes";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
*/
	?>