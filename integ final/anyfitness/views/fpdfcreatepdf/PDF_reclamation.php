<?php 
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=adam','root','');

class myPDF extends FPDF{
    function header(){
        $this->image('logo.png',0,0);
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'RECLAMATIONS DES CLIENTS',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10,'Administration AnyFitness',0,0,'C');
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial','',8);
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(30,10,'ID Reclamation',1,0,'C');
        $this->Cell(20,10,'ID Client',1,0,'C');
        $this->Cell(70,10,'Type',1,0,'C');
        $this->Cell(160,10,'Contenu',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt = $db->query('select * from reclamation');
        while($data = $stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(30,40,$data->id,1,0,'C');
            $this->Cell(20,40,$data->id_client,1,0,'L');
            $this->Cell(70,40,$data->type,1,0,'L');
            $this->Cell(160,40,$data->content,1,0,'L');
            $this->Ln();
        }
    }
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();