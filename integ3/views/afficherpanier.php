<?PHP
include "../core/panierc.php";
$panierc1=new panierc();
$listepanier=$panierc1->afficherpanier();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id</td>
<td>client</td>
<td>prix</td>
<td>date</td>
<td>heure</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listepanier as $row){
	?>
	<tr>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['client']; ?></td>
	<td><?PHP echo $row['prix']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['heure']; ?></td>
	<td><form method="POST" action="supprimerpanier.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierpanier.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


