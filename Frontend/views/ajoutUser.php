<?PHP
include "../entities/userH.php";
include "../core/user.php";

if (isset($_POST['userid']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password'])){
$user1=new user($_POST['userid'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$user1C=new userC();
$user1C->ajouterUser($user1);
header('Location: login.php');
}else{
	echo '<script language="javascript">';
					echo 'alert("Check your info fields!")';
					echo '</script>';
	header('Location: login.php');
}
//*/

?>