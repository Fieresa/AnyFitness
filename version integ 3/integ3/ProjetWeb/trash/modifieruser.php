<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/userH.php";
include "../core/user.php";
if (isset($_GET['userid'])){
	$userC=new userC();
    $result=$userC->recupererUser($_GET['userid']);
	foreach($result as $row){
		$userid=$row['userid'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$email=$row['email'];
		$password=$row['password'];
?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>userid</td>
<td><input type="text" name="userid" value="<?PHP echo $userid ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="text" name="password" value="<?PHP echo $password ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="text" name="userid1" value="<?PHP echo $_GET['userid'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$user=new user($_POST['userid'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password']);
	$userC->modifierUser($user,$_POST['userid1']);
	echo $_POST['userid1'];
	header('Location: afficherUser.php');
}
?>
</body>
</HTMl>