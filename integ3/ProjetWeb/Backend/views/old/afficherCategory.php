<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/stylev3.css" type="text/css">
</head>
<body>
<?PHP
include "../core/category.php";
$category1C=new categoryC();
$listeCategories=$category1C->afficherCategories();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<th>userid</th>
<th>role</th>
<th>supprimer</th>
<th>modifier</th>
</tr>

<?PHP
foreach($listeCategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['userid']; ?></td>
	<td><?PHP echo $row['role']; ?></td>
	<td><form method="POST" action="supprimerCategory.php">
	<input type="submit" name="supprimer" value="Delete">
	<input type="hidden" value="<?PHP echo $row['userid']; ?>" name="userid">
	</form>
	</td>
	<td><a href="modifierCategory.php?userid=<?PHP echo $row['userid']; ?>">
	Edit</a></td>
	</tr>
	<?PHP
}
?>
</table>

</body>
</html>