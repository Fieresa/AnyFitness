<?PHP
include "../entities/reservation.php";
include "../core/COREreservation.php";
$reservationc=new reservationc();
    $result=$reservationc->nextreservation();
	foreach($result as $row){
		$max=$row['max'];}



if (isset($_POST['Id_cour']) and isset($_POST['Id_client'])){
$reservation1=new reservation($max,$_POST['Id_cour'],$_POST['Id_client']);
echo $max;
//Partie2
/*
var_dump($reservation1);
}
*/
//Partie3
$reservation1C=new reservationC();
$reservation1C->ajouterreservation($reservation1);
?>
<meta http-equiv="Refresh" content="0;URL=mailreservation.php?Id_cour=<?PHP echo $_POST['Id_cour']; ?>">
<?php	
}else{
	echo "vérifier les champs";
}
//*/

?>
