<?PHP
include "../entities/categoryH.php";
include "../core/category.php";

if (isset($_POST['userid']) and isset($_POST['role'])){
$category1=new category($_POST['userid'],$_POST['role']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$category1C=new categoryC();
$category1C->ajouterCategory($category1);
header('Location: users.php');
}else{
	echo "Verifier les champs.";

}
//*/

?>