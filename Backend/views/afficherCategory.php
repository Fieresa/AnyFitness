<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/stylev3.css" type="text/css">
</head>
<body>
<?PHP
include "../core/category.php";
$category1C=new categoryC();
$listeCategories=$category1C->stats();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<th>Role</th>
<th>Number</th>
</tr>

<?PHP
foreach($listeCategories as $row){
	?>
	<tr>
	<td><?PHP echo $row['role']; ?></td>
	<td><?PHP echo $row['Number']; ?></td>
	</tr>
	<?PHP
}
?>
</table>

</body>
</html>