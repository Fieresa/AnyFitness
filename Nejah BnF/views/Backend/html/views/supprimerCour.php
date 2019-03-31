<?PHP
include "../core/COREcour.php";
$courC=new courC();
if (isset($_POST["Id_cour"])){
	$courC->supprimercour($_POST["Id_cour"]);
	header('Location: afficherbackcour.php');
}

?>