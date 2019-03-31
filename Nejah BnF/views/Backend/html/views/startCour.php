<?PHP
include "../entities/cour.php";
include "../core/COREcour.php";
$cour=new cour('75757575','BEN Ahmed','Salah',50,20);
$courrC=new courC();
$courrC->affichercour($cour);
echo "****************";
echo "<br>";
echo "Id_cour:".$cour->getId_cour();
echo "<br>";
echo "Id_coach:".$cour->getId_coach();
echo "<br>";
echo "Id_backupcoach:".$cour->getId_backupcoach();
echo "<br>";
echo "Capacity:".$cour->getCapacity();
echo "<br>";
echo "Duration:".$cour->getDuration();
echo "<br>";
echo "le salaire est : ";
$courrC->calculerSalaire($cour); 
echo "<br>";


?>