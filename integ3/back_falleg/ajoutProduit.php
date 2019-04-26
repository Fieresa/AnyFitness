<?PHP
include "/entities/produit.php";
include "/core/produitC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['categorie']) and isset($_POST['Qt'])){
$produit1=new produit($_POST['id'],$_POST['nom'],$_POST['prix'],$_POST['categorie'],$_POST['Qt']);
//Partie2
/*
var_dump($produit1);
}
*/
//Partie3
$produit1C=new produitC();
$produit1C->ajouterproduit($produit1);
header('Location: afficherProduit.php');
	
}else{
	echo "verifier les champs";
}
//*/

?>