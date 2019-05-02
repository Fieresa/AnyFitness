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
$codec1=new codec();
$prixcommandes=$codec1->prixtotal($_SESSION['userid']);
$listecodes=$codec1->affichercommandesp($_SESSION['userid']);
$solde=$codec1->solde($_SESSION['userid']);
$email=$codec1->recuperermail($_SESSION['userid']);
$reservation=$codec1->mailreservation($_GET['Id_cour']);
$client=$codec1->afficherclient($_SESSION['userid']);
foreach($prixcommandes as $row){
	$prixtotal=$row['pt'];}
	foreach ($reservation as $row)
	{$Heure=$row['Heure'];
$Jour=$row['Jour'];
$Capacity=$row['Capacity'];} 
foreach ($solde as $row)
	{$solde=$row['solde'];} 
foreach ($email as $row)
	{$to=$row['email'];} 
	# code...
foreach ($client as $row)
	{$nom=$row['nom'];
$prenom=$row['prenom'];
$id=$row['userid'];} 
foreach ($listecodes as $row)
{$email=$row['email'];}
$sujet='merci pour votre reservation
';
$texte='ANYFITNESS
';
$texte.='merci pour votre reservation:
id client:
';
$texte.=$id;
$texte.='
';
$texte.='nom du client:
';
$texte.=$nom;
$texte.='
';
$texte.='prenom du client:
';
$texte.=$prenom;
$texte.='
';
$texte.='cour:
';
$texte.=$Capacity;
$texte.='
';
$texte.='Heure:
';
$texte.=$Heure;
$texte.='
';
$texte.='Jour:
';
$texte.=$Jour;


$header='From : ANYFITNESS';
mail($to,$sujet,$texte,$header);
header('Location: affichereservation.php');


?>