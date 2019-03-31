<?PHP
include "../core/COREreservation.php";
$reservation1C=new reservationC();
$listereservation=$reservation1C->afficherreservations();

//var_dump($listereservation->fetchAll());
?>
<table border="1">
<tr>
<td>Id_reservation</td>
<td>Id_cour</td>
<td>Id_client</td>
<td>dates</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listereservation as $row){
	?>
	<tr>
	<td><?PHP echo $row['Id_reservation']; ?></td>
	<td><?PHP echo $row['Id_cour']; ?></td>
	<td><?PHP echo $row['Id_client']; ?></td>
	<td><?PHP echo $row['dates']; ?></td>
	<td><form method="POST" action="supprimerreservation.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id_reservation']; ?>" name="Id_reservation">
	</form>
	</td>
	<td><a href="modifierreservation.php?Id_reservation=<?PHP echo $row['Id_reservation']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


