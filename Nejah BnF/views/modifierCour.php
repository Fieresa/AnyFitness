<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/cour.php";
include "../core/COREcour.php";
if (isset($_GET['Id_cour'])){
	$courC=new courC();
    $result=$courC->recuperercour($_GET['Id_cour']);
	foreach($result as $row){
		$Id_cour=$row['Id_cour'];
		$Id_coach=$row['Id_coach'];
		$Id_backupcoach=$row['Id_backupcoach'];
		$Capacity=$row['Capacity'];
		$Duration=$row['Duration'];
		$Heure=$row['Heure'];
		$Jour=$row['Jour'];
?>
<form method="POST">
<table>
<caption>Modifier cour</caption>
<tr>
<td>Id_cour</td>
<td><input type="text" name="Id_cour" value="<?PHP echo $Id_cour ?>"></td>
</tr>
<tr>
<td>Id_coach</td>
<td><input type="text" name="Id_coach" value="<?PHP echo $Id_coach ?>"></td>
</tr>
<tr>
<td>Id_backupcoach</td>
<td><input type="text" name="Id_backupcoach" value="<?PHP echo $Id_backupcoach ?>"></td>
</tr>
<tr>
<td>Capacity</td>
<td><input type="number" name="Capacity" value="<?PHP echo $Capacity ?>"></td>
</tr>
<tr>
<td>Duration</td>
<td><input type="text" name="Duration" value="<?PHP echo $Duration ?>"></td>
</tr>
<td>Heure</td>
<td><input type="number" name="Heure" value="<?PHP echo $Heure ?>"></td>
</tr>
<tr>
<td>Jour</td>
<td><input type="text" name="Jour" value="<?PHP echo $Jour ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="Id_cour_ini" value="<?PHP echo $_GET['Id_cour'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$cour=new cour($_POST['Id_cour'],$_POST['Id_coach'],$_POST['Id_backupcoach'],$_POST['Capacity'],$_POST['Duration'],$_POST['Heure'],$_POST['Jour']);
	$courC->modifiercour($cour,$_POST['Id_cour_ini']);
	echo $_POST['Id_cour_ini'];
	header('Location: affichercour.php');
}
?>
</body>
</HTMl>