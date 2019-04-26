<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/panier.php";
include "../core/panierc.php";
if (isset($_GET['id'])){
	$panierc=new panierc();
    $result=$panierc->recupererpanier($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		$client=$row['client'];
		$prix=$row['prix'];
		$date=$row['date'];
		$heure=$row['heure'];
?>
<form method="POST">
<table>
<caption>Modifier panier</caption>
<tr>
<td>id</td>
<td><input type="number" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>client</td>
<td><input type="number" name="client" value="<?PHP echo $client ?>"></td>
</tr>
<tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date" value="<?PHP echo $date ?>"></td>
</tr>
<td>heure</td>
<td><input type="time" name="heure" value="<?PHP echo $heure ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$panier=new panier($_POST['id'],$_POST['client'],$_POST['prix'],$_POST['date'],$_POST['heure']);
	$panierc->modifierpanier($panier,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherpanier.php');
}
?>
</body>
</HTMl>