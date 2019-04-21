<?php
     
				session_start(); 
				if (!isset($_SESSION['userid'])) 
				{
					header("Location: ../ProjetWeb/Frontend/views/login.php");
				}
            ?>
<?PHP
include "../entities/code.php";
include "../core/codec.php";
$codec1=new codec();
$prixcommandes=$codec1->prixtotal($_SESSION['userid']);
$listecodes=$codec1->affichercommandesp($_SESSION['userid']);
$solde=$codec1->solde($_SESSION['userid']);
$soldenouv=$codec1->soldenouv($_SESSION['userid']);
$client=$codec1->afficherclient($_SESSION['userid']);
foreach($soldenouv as $row){
		$soldenouv=$row['sn'];}
$codec1->modifiersolde2($soldenouv,$_SESSION['userid']);
$codec1->modifiercommandes($_SESSION['userid']);
foreach($prixcommandes as $row){
	$prixtotal=$row['pt'];}
foreach ($solde as $row)
	{$solde=$row['solde'];} 
	# code...
foreach ($client as $row)
	{$nom=$row['nom'];
$prenom=$row['prenom'];
$id=$row['userid'];} 
require 'fpdf181/fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Image('any fitness3.png',10,10,-1000);
$pdf->Cell(0,10,"ANY FITNESS",1,1,'C');
$pdf->Cell(0,10,"Facture",1,1,'C');
$pdf->Cell(50,10,"id du client: ",1,0);
$pdf->Cell(65,10,$id,1,1);
$pdf->Cell(50,10,"nom du client: ",1,0);
$pdf->Cell(65,10,$nom,1,1);
$pdf->Cell(50,10,"prenom: ",1,0);
$pdf->Cell(65,10,$prenom,1,1);
foreach ($listecodes as $row)
	{$numcmd=$row['numcmd'];
	$produit=$row['nom'];
	$prix=$row['prix'];
	$quantite=$row['quantite'];
$pdf->Cell(0,10,"commande numero: ".$numcmd,1,1, 'C');
$pdf->Cell(50,10,"produit: ",1,0);
$pdf->Cell(65,10,$produit,1,1);
$pdf->Cell(50,10,"prix: ",1,0);
$pdf->Cell(65,10,$prix." DT",1,1);
$pdf->Cell(50,10,"quantite: ",1,0);
$pdf->Cell(65,10,$quantite,1,1);
//$pdf->Cell(65,10,$,1,1);
}
$pdf->Cell(0,10,"",1,1, 'C');
$pdf->Cell(50,10,"ancien solde: ",1,0);
$pdf->Cell(65,10,$solde." DT",1,1);
$pdf->Cell(50,10,"prix total achats: ",1,0);
$pdf->Cell(65,10,$prixtotal." DT",1,1);
$pdf->Cell(50,10,"nouveau solde: ",1,0);
$pdf->Cell(65,10,$soldenouv." DT",1,1);
$pdf->Cell(50,10,"date: ",1,0);
$pdf->Cell(65,10,date("d/m/y"),1,1);
$pdf->Cell(50,10,"heure: ",1,0);
$pdf->Cell(65,10,date("H:i:s"),1,1);
$pdf->Cell(0,10,"",1,1, 'C');
$pdf->Cell(0,10,"Merci pour vos achats",1,1, 'C');
$pdf->Cell(0,10,"",1,1, 'C');
$pdf->SetFont("Arial","B",3);
$pdf->Cell(0,10,"(c) Tempest copyrights all rights reserved for Adam Kaak and his team",1,1, 'C');
$pdf->Image('v4.png',200,287,-1000);
$pdf->output();
?>