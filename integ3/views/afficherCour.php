<?PHP
include "../core/COREcour.php";
$cour1C=new courC();
$listecour=$cour1C->affichercours();

//var_dump($listecour->fetchAll());
?>
<table border="1">
<tr>
<td>Id_cour</td>
<td>Id_coach</td>
<td>Id_backupcoach</td>
<td>Capacity</td>
<td>Duration</td>
<td>Heure</td>
<td>Jour</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecour as $row){
	?>
	<tr>
	<td><?PHP echo $row['Id_cour']; ?></td>
	<td><?PHP echo $row['Id_coach']; ?></td>
	<td><?PHP echo $row['Id_backupcoach']; ?></td>
	<td><?PHP echo $row['Capacity']; ?></td>
	<td><?PHP echo $row['Duration']; ?></td>
	<td><?PHP echo $row['Heure']; ?></td>
	<td><?PHP echo $row['Jour']; ?></td>
	<td><form method="POST" action="supprimercour.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id_cour']; ?>" name="Id_cour">
	</form>
	</td>
	<td><a href="modifiercour.php?Id_cour=<?PHP echo $row['Id_cour']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


