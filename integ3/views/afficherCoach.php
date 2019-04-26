<?PHP
include "../core/COREcoach.php";
$coach1C=new coachC();
$listecoach=$coach1C->affichercoachs();

//var_dump($listecoach->fetchAll());
?>
<table border="1">
<tr>
<td>Id_coach</td>
<td>prenom</td>
<td>nom</td>
<td>Tel</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listecoach as $row){
	?>
	<tr>
	<td><?PHP echo $row['Id_coach']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['Tel']; ?></td>
	<td><form method="POST" action="supprimercoach.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['Id_coach']; ?>" name="Id_coach">
	</form>
	</td>
	<td><a href="modifiercoach.php?Id_coach=<?PHP echo $row['Id_coach']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>

</table>

