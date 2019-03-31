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
	<input type="hidden" value="<?PHP echo $row['Id_coach']; ?>" name="Id_coach">
	</tr>
	<?PHP
}
?>

</table>

