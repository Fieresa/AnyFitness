<?PHP
include "../entities/avisH.php";
include "../core/avisC.php";
session_start();
if (isset($_POST['id_client']) and isset($_POST['evaluation']))
{
$avis1=new Avis('',$_POST['id_client'],$_POST['evaluation']);

$avis1C=new AvisC();
$avis1C->ajouterAvis($avis1);
header('Location: afficherAvis.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>