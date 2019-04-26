<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/reservation.php";
include "../core/COREreservation.php";
if (isset($_GET['Id_reservation'])){
	$reservationC=new reservationC();
    $result=$reservationC->recupererreservation($_GET['Id_reservation']);
	foreach($result as $row){
		$Id_reservation=$row['Id_reservation'];
		$Id_cour=$row['Id_cour'];
		$Id_client=$row['Id_client'];
		$dates=$row['dates'];
?>
<form method="POST">
<table>
<caption>Modifier reservation</caption>
<tr>
<td>Id_reservation</td>
<td><input type="number" name="Id_reservation" value="<?PHP echo $Id_reservation ?>"></td>
</tr>
<tr>
<td>Id_cour</td>
<td><input type="number" name="Id_cour" value="<?PHP echo $Id_cour ?>"></td>
</tr>
<tr>
<td>Id_client</td>
<td><input type="number" name="Id_client" value="<?PHP echo $Id_client ?>"></td>
</tr>
<tr>
<td>dates</td>
<td><input type="number" name="dates" value="<?PHP echo $dates ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Id_reservation_ini" value="<?PHP echo $_GET['Id_reservation'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$reservation=new reservation($_POST['Id_reservation'],$_POST['Id_cour'],$_POST['Id_client'],$_POST['dates']);
	$reservationC->modifierreservation($reservation,$_POST['Id_reservation_ini']);
	echo $_POST['Id_reservation_ini'];
	header('Location: afficherreservation.php');
}
?>
</body>
</HTMl>