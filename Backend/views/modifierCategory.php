<HTML>
<head>
<?php
    session_start(); 
                if (!isset($_SESSION['userid']) || !isset($_SESSION['role']) )
                {                if($_SESSION['role'] != "Admin")
                   { header("Location: loginback.php"); 
                }
              }
    ?>
</head>
<body>
<?PHP
include "../entities/categoryH.php";
include "../core/category.php";
if (isset($_GET['userid'])){
	$categoryC=new categoryC();
    $result=$categoryC->recupererCategory($_GET['userid']);
	foreach($result as $row){
		$userid=$row['userid'];
		$role=$row['role'];
?>
<form method="POST">
<table>
<caption>Modifier Category</caption>
<tr>
<td>Userid</td>
<td><input type="number" name="userid" value="<?PHP echo $userid ?>"></td>
</tr>
<tr>
<td>Role</td>
<td><input type="text" name="role" value="<?PHP echo $role ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="userid1" value="<?PHP echo $_GET['userid'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$category=new category($_POST['userid'],$_POST['role']);
	$categoryC->modifierCategory($category,$_POST['userid1']);
	echo $_POST['userid1'];
	header('Location: afficherCategory.php');
}
?>
</body>
</HTMl>