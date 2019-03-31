<?PHP
include "../entities/reservation.php";
include "../core/COREreservation.php";

if (isset($_POST['Id_reservation']) and isset($_POST['Id_client']) and isset($_POST['Id_cour'])){
$reservation1=new reservation($_POST['Id_reservation'],$_POST['Id_client'],$_POST['Id_cour']);
//Partie2
/*
var_dump($reservation1);
}
*/
//Partie3
$reservation1C=new reservationC();
$reservation1C->ajouterreservation($reservation1);
header('Location: afficherbackreservation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>