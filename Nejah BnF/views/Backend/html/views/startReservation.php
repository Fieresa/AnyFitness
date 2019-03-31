<?PHP
include "../entities/reservation.php";
include "../core/COREreservation.php";
$reservation=new reservation('75757575','BEN Ahmed','Salah');
$reservationrC=new reservationC();
$reservationrC->afficherreservation($reservation);
echo "****************";
echo "<br>";
echo "Id_reservation:".$reservation->getId_reservation();
echo "<br>";
echo "Id_client:".$reservation->getId_client();
echo "<br>";
echo "Id_cour:".$reservation->getId_cour();
echo "<br>";
echo "le salaire est : ";
$reservationrC->calculerSalaire($reservation); 
echo "<br>";


?>