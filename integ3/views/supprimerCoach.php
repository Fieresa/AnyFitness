<?PHP
include "../core/COREcoach.php";
$coachC=new coachC();
if (isset($_POST["Id_coach"])){
	$coachC->supprimercoach($_POST["Id_coach"]);
	header('Location: afficherbackcoach.php');
}

?>