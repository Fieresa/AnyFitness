<?PHP
include "../core/commandesc.php";
$commandesc=new commandesc();
if (isset($_POST["numcmd"])){
	$commandesc->supprimercommandes($_POST["numcmd"]);
	header('Location: affichercommandes.php');
}

?>