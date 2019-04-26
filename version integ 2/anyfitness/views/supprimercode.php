<?PHP
include "../core/codec.php";
$codec=new codec();
if (isset($_POST["num"])){
	$codec->supprimercode($_POST["num"]);
	header('Location: affichcomplet.php');
}

?>