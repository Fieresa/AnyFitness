<?PHP
include "/core/CategorieC.php";
$CategorieC=new CategorieC();
if (isset($_POST["NoC"])){
	$CategorieC->supprimerCategorie($_POST["NoC"]);
	header('Location: afficherCategorie.php');
}

?>