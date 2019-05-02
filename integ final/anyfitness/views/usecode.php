<?php
     
				session_start(); 
				if (!isset($_SESSION['userid'])) 
				{
					header("Location: login.php");
				}
            ?>
	

<?PHP
if ($_POST['code']!=null && $_POST['montant']!=null)
{include "../entities/code.php";
include "../core/codec.php";
$codec=new codec();
if (isset($_POST['montant']) and isset($_POST['code']))
	{	$result1=$codec->montant($_POST['code']);
foreach($result1 as $row){
		$montant=$row['montant'];}
		$result2=$codec->validite($_POST['code']);
foreach($result2 as $row){
		$validite=$row['validite'];}
if ((isset($_POST['Utiliser']))&&($montant == $_POST['montant'])&& ($validite == 0))
{$result3=$codec->dateajout($_POST['code']);
foreach($result3 as $row){
		$dateajout=$row['dateajout'];
	}
	$code=new code(($_POST['code']),($_POST['montant']),1,$dateajout,$_SESSION['userid']);
	$codec->modifiercode($code,$_POST['num_ini']);
		$codec->modifiersolde($_POST['montant'],$_SESSION['userid']);
	echo $_POST['num_ini'];

	header('Location: affichercodes.php');
}
else{
	header('Location: utilisercodee.php');
}}
else{
header('Location: utilisercodee.php');

}
}
else
{header('Location: utilisercodee.php');}
?>