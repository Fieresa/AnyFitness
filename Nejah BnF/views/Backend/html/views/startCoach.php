<?PHP
include "../entities/coach.php";
include "../core/COREcoach.php";
$coach=new coach('75757575','BEN Ahmed','Salah','50');
$coachrC=new coachC();
$coachrC->affichercoach($coach);
echo "****************";
echo "<br>";
echo "Id_coach:".$coach->getId_coach();
echo "<br>";
echo "prenom:".$coach->getprenom();
echo "<br>";
echo "nom:".$coach->getnom();
echo "<br>";
echo "Path:".$coach->getPath();
echo "<br>";
echo "le salaire est : ";
$coachrC->calculerSalaire($coach); 
echo "<br>";


?>