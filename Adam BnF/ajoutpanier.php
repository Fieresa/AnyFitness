<?PHP
include "../entities/panier.php";
include "../core/panierc.php";

if (isset($_POST['id']) and isset($_POST['client']) and isset($_POST['prix'])  and isset($_POST['date']) and isset($_POST['heure'])){
$panier1=new panier($_POST['id'],$_POST['client'],$_POST['prix'],$_POST['date'],$_POST['heure']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$panier1c=new panierc();
$panier1c->ajouterpanier($panier1);
header('Location: afficherpanier.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>