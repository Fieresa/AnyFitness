<?php
     
				session_start(); 
				if (!isset($_SESSION['userid'])) 
				{
					header("Location: ../ProjetWeb/Frontend/views/login.php");
				}
            ?>
<?PHP

include "../entities/commandes.php";
include "../core/commandesc.php";

	$commandesc=new commandesc();
    $result=$commandesc->nextcommande();
	foreach($result as $row){
		$max=$row['max'];}
if (isset($_POST['produit']) and isset($_POST['quantite']))
	{		
$commandes1=new commandes($max,$_SESSION['userid'],$_POST['produit'],0,$_POST['quantite'],date("y/m/d"),date("H:i:s"),1);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$commandes1c=new commandesc();
$commandes1c->ajoutercommandes($commandes1);
    $result=$commandesc->modifierqt($_POST['quantite'],$_POST['produit']);
header('Location: panier.php');
	
}
else
{
	echo "vérifier les champs";
}
//*/


?>