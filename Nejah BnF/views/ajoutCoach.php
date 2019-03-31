<?PHP
include "../entities/coach.php";
include "../core/COREcoach.php";

if (isset($_POST['Id_coach']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['Path'])){
$coach1=new coach($_POST['Id_coach'],$_POST['nom'],$_POST['prenom'],$_POST['Path']);
//Partie2
/*
var_dump($coach1);
}
*/
//Partie3
$coach1C=new coachC();
$coach1C->ajoutercoach($coach1);
header('Location: affichercoach.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>