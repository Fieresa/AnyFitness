<?PHP
include "../entities/commandes.php";
include "../core/commandesc.php";



if (isset($_POST['produit']) and isset($_POST['quantite'])){
$commandes1=new commandes(,$_POST['client'],$_POST['produit'],$_POST['prixu'],$_POST['quantite'],$_POST['date'],$_POST['heure'],$_POST['panier']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commandes1c=new commandesc();
$commandes1c->ajoutercommandes($commandes1);
header('Location: affichercommandes.php');
	
}else{
	echo "vérifier les champs";
}
//*/



?>