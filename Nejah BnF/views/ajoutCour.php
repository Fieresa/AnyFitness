<?PHP
include "../entities/cour.php";
include "../core/COREcour.php";

if (isset($_POST['Id_cour']) and isset($_POST['Id_backupcoach']) and isset($_POST['Id_coach']) and isset($_POST['Capacity']) and isset($_POST['Duration'])and isset($_POST['Heure']) and isset($_POST['Jour'])){
$cour1=new cour($_POST['Id_cour'],$_POST['Id_backupcoach'],$_POST['Id_coach'],$_POST['Capacity'],$_POST['Duration'],$_POST['Heure'],$_POST['Jour']);
//Partie2
/*
var_dump($cour1);
}
*/
//Partie3
$cour1C=new courC();
$cour1C->ajoutercour($cour1);
header('Location: affichercour.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>