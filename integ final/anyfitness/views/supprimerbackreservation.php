<?PHP
include "../core/COREreservation.php";
$reservationC=new reservationC();
if (isset($_POST["Id_reservation"])){
	$reservationC->supprimerreservation($_POST["Id_reservation"]);
	header('Location: afficherbackreservation.php');
}

?>