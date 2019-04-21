<?PHP
include "../core/user.php";
$userC=new userC();
if (isset($_POST["userid"])){
	$userC->supprimerUser($_POST["userid"]);
	header('Location: showusers.php');
}

?>