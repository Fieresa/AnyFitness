<?PHP
include "../entities/code.php";
include "../core/codec.php";
$codec=new codec();
$result1=$codec->soldenouv();
foreach($result1 as $row){
		$solde=$row['sn'];}
	$f_name=$_POST['first_name'];
	$l_name=$_POST['last_name'];
	$gender=$_POST['gender'];
	$dob=$solde;
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];

require 'fpdf181/fpdf.php';
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Welcome ($f_name)",1,1,'C');
$pdf->Cell(50,10,"last name: ",1,0);
$pdf->Cell(65,10,$l_name,1,1);
$pdf->Cell(50,10,"gender: ",1,0);
$pdf->Cell(65,10,$gender,1,1);
$pdf->Cell(50,10,"dob: ",1,0);
$pdf->Cell(65,10,$dob,1,1);
$pdf->Cell(50,10,"mobile: ",1,0);
$pdf->Cell(65,10,$mobile,1,1);
$pdf->Cell(50,10,"email: ",1,0);
$pdf->Cell(65,10,$email,1,1);
$pdf->output();