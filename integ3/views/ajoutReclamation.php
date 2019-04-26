
<?PHP
include "../entities/reclamationH.php";
include "../core/reclamationC.php";
session_start();
if (isset($_POST['id_client']) and isset($_POST['type']) and isset($_POST['content'])){
$reclamation1=new reclamation('',$_POST['id_client'],$_POST['type'],$_POST['content']);
var_dump($reclamation1);
$reclamation1C=new ReclamationC();
$reclamation1C->ajouterReclamation($reclamation1);
header('Location: afficherReclamation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>


