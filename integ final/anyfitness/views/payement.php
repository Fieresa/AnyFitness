<?php
     
				session_start(); 
				if (!isset($_SESSION['userid'])) 
				{
					header("Location: login.php");
				}
            ?>
<?PHP

include "../entities/code.php";
include "../core/codec.php";
$codec=new codec();
$result1=$codec->soldenouv($_SESSION['userid']);
foreach($result1 as $row){
		$soldenouv=$row['sn'];}
if ((isset($_POST['Confirmer']))&&($soldenouv >= 0))
{	

	header('Location: mail.php');
	}
else{
	header('Location: payere.php');
}

?>