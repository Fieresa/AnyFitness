<?PHP
include "../core/panierc.php";
$panierc=new panierc();
if (isset($_POST["id"])){
	$panierc->supprimerpanier($_POST["id"]);
	header('Location: afficherpanier.php');
}

?>