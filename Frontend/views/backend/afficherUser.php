<?PHP
include "../core/user.php";
$user1C=new userC();
$listeUsers=$user1C->afficherUsers();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Userid</td>
<td>Nom</td>
<td>Prenom</td>
<td>Email</td>
<td>Password</td>
<td>Supprimer</td>
<td>Modifier</td>
</tr>

<?PHP
foreach($listeUsers as $row){
	?>
	<tr>
	<td><?PHP echo $row['userid']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['password']; ?></td>
	<td><form method="POST" action="supprimerUser.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['userid']; ?>" name="userid">
	</form>
	</td>
	<td><a href="edit.php?userid=<?PHP echo $row['userid']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


