<?PHP

include "../entities/commandes.php";
include "../core/commandesc.php";

	$commandesc=new commandesc();
    $result=$commandesc->nextcommande();
	foreach($result as $row){
		$max=$row['max'];}
if (isset($_POST['produit']) and isset($_POST['quantite']))
	{		
	$result1=$commandesc->idproduit($_POST['produit']);
foreach($result1 as $row){
		$id=$row['id'];}
	


$commandes1=new commandes($max,5,$id,0,$_POST['quantite'],date("y/m/d"),date("H:i:s"),1);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commandes1c=new commandesc();
$commandes1c->ajoutercommandes($commandes1);
header('Location: panier.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/


?>