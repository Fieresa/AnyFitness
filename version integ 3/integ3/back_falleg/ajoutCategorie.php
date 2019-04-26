<?PHP
include "/entities/Categorie.php";
include "/core/CategorieC.php";

if (isset($_POST['NoC']) and isset($_POST['NomC']) and isset($_POST['DescriptionC'])){
$Categorie1=new Categorie($_POST['NoC'],$_POST['NomC'],$_POST['DescriptionC']);
$Categorie1C=new CategorieC();
$Categorie1C->ajouterCategorie($Categorie1);
header('Location: afficherCategorie.php');
	
}else{
	echo "verifier les champs";
}
//*/

?>