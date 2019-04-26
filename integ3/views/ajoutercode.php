<?PHP
if ($_POST['code']!=null && $_POST['montant']!=null)
{	include "../entities/code.php";
include "../core/codec.php";
	$codec=new codec();
	    $result=$codec->verif($_POST['code']);
foreach($result as $row){
		$verif=$row['verif'];}
if ($verif==0)
	{		
$code1=new code($_POST['code'],$_POST['montant'],0,date("y/m/d"),0);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$code1c=new codec();
$code1c->ajoutcode($code1);
header('Location: affichcomplet.php');
}
else
{
header('Location: ajoutcodee.php');
}	
}
else
{
header('Location: ajoutcodee.php');
}
//*/


?>