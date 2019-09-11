<?php
session_start();
//include connection file 
$conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "";
}
else{ echo "";}
include_once('pdf/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,10,50);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'History Details',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array('hid'=>'Transaction Id', 'amount'=> 'Amount','balance'=> 'Balance','time'=> 'Date and Time','type'=> 'Transaction type');
 
$result = mysqli_query($conn,"SELECT hid,amount,balance,time,type FROM history where cid='".$_SESSION['login_user']."'") or die("database error:". mysqli_error($conn));
$header = mysqli_query($conn, "SHOW columns FROM history where field !='cid' ");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(35,10,$column,1);
}
$pdf->Output();
?>