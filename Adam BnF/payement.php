<?PHP

include "../entities/code.php";
include "../core/codec.php";
$codec=new codec();
$result1=$codec->soldenouv();
foreach($result1 as $row){
		$soldenouv=$row['sn'];}
if ((isset($_POST['Confirmer']))&&($soldenouv >= 0))
{	

	header('Location: panier.php');
	}
else{
	header('Location: payere.php');
}

?>