<?PHP
include "../core/category.php";
$categoryC=new categoryC();
if (isset($_POST["userid"])){
	$categoryC->supprimerCategory($_POST["userid"]);
	header('Location: users.php');
}

?>