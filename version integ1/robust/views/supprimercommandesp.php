<?PHP
include "../core/commandesc.php";
$commandesc=new commandesc();
if (isset($_POST["numcmd"])){
	$commandesc->supprimercommandes($_POST["numcmd"]);
		    $result=$commandesc->modifierqt1(0-($_POST['quantite']),$_POST['produit']);
	header('Location: panier.php');
}

?>