<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/coach.php";
include "../core/COREcoach.php";
if (isset($_GET['Id_coach'])){
	$coachC=new coachC();
    $result=$coachC->recuperercoach($_GET['Id_coach']);
	foreach($result as $row){
		$Id_coach=$row['Id_coach'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$Tel=$row['Tel'];
?>
<form method="POST">
<table>
<caption>Modifier coach</caption>
<tr>
<td>Id_coach</td>
<td><input type="number" name="Id_coach" value="<?PHP echo $Id_coach ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Path</td>
<td><input type="number" name="Tel" value="<?PHP echo $Path ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Id_coach_ini" value="<?PHP echo $_GET['Id_coach'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$coach=new coach($_POST['Id_coach'],$_POST['nom'],$_POST['prenom'],$_POST['Tel']);
	$coachC->modifiercoach($coach,$_POST['Id_coach_ini']);
	echo $_POST['Id_coach_ini'];
	header('Location: affichercoach.php');
}
?>
</body>
</HTMl>