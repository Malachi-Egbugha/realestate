<?php 
require_once('config/db.php');
require "fpdf.php";
$operation = new Estate();
$operation->customer_controll_access();
$data = $operation->getPaymentInvoice($_SESSION['emaill']);
$row = mysqli_fetch_assoc($data);

$qr = $row["reference"];

$date = new DateTime($row["date_paid"]);
$entryDate = $date->format('d M, Y');

       
        require_once 'myqrcode.php';
$bar = $PNG_WEB_DIR.basename($filename);
class myPDF extends FPDF{

  function header1($row,$entryDate,$bar){
    //    $sql2=mysqli_query($connection,"SELECT * FROM result
    // WHERE result.regno='".$_SESSION['reg']."'
    // ");
    // while ($row = mysqli_fetch_array($sql2)) {
    // $name=$row["student"];
    // $regno=$row["regno"];
    // $level=$row["level"];
    // $semester=$row["semester"];
    // }
    
    $this->Image('./assets/img/BAYMON1.PNG', 7, 10, 'C');
    $this->SetFont('Arial', 'B', 16);
    $this->Cell(190,7, 'BAYMOON INVESTMENT LIMITED',0,0,'C');
    $this->Ln();
    $this->SetFont('Arial', '', 10);
    $this->Cell(190,8, 'Baymoon Investment Road P.M.B 2021, Garki, Abuja State',0,0,'C');
    $this->Image(''.$bar.'', 170, 8);
    $this->Ln();
    $this->SetFont('Arial', '', 10);
    $this->Cell(190,6, 'Telephone: +234(0)8165426897',0,0,'C');
    $this->Ln();
     $this->SetFont('Arial', 'B', 12);
    $this->Cell(190,10, 'Baymoon Investment Limited Customer Invoice',0,0,'C');
    $this->Ln();
    $this->SetDrawColor(188,188,188);
    $this->Ln();
    // $this->Cell(190,55, 
    //   $this->Image('uploads/IMG_20201124_174621_0~2.jpg', 13, 54, 40, 50)
    //  ,1,0,'L');
    // $this->Ln();

$this->SetFont('Arial', 'B', 10);
$this->Cell(160,9,'Payment Confirmation Details', 1,1, 'C');
// $this->Cell(60,54,$this->Image('./assets/img/BAYMON.PNG', 13, 62, 40, 49) , 1,0, 'C');
$x = $this->GetX();
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Payment ID:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["reference"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Email Address:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["email"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Full Name:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["fname"]." ".$row["lname"]." ".$row["oname"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Phone No:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["phone"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Payment Type:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["payment_type"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Plot Tag:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["tag"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Plot Size:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["size"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Amount Paid:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, number_format($row["amount"]), 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Payment Date:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $entryDate, 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Number of Plot:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["number_plot"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Payment Status:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(120,9, $row["status"], 1,1);
$this->SetX($x);

$this->Ln();



  }
  
  // function footer(){
  //   $this->SetY(-15);
  //   $this->SetFont('Arial', '', 8);
  //   $this->Cell(0,10, 'Page '.$this->PageNo().'/{nb}',0,0,'C');
  // }


  // function viewTable(){
  //   $this->SetFont('times', '', 12);
   
  //   $this->Cell(10, 10, '$count++', 1, 0, 'C');
  //   $this->Cell(33, 10, '$row["ccode"]', 1, 0, 'L');
  //   $this->Cell(90, 10, '$row["ctitle"]', 1, 0, 'L');
  //   $this->Cell(15, 10, '$row["cunit"]', 1, 0, 'L');
  //   $this->Cell(18, 10, '$row["grade"]', 1, 0, 'L');
  //   $this->Cell(25, 10, '$row["pointt"]', 1, 0, 'L');
  //   $this->Ln();

  //   $this->Cell(191,10, 'FIRST SEMESTER' ,1,0,'C');
  //   $this->Ln();
  // }

  // function headerTable(){
  //   $this->SetFont('times', 'B', 12);
  //   $this->Cell(10, 10, 'S/N', 1, 0, 'C');
  //   $this->Cell(33, 10, 'COURSE CODE', 1, 0, 'C');
  //   $this->Cell(90, 10, 'COURSE TITLE', 1, 0, 'C');
  //   $this->Cell(15, 10, 'UNIT', 1, 0, 'C');
  //   $this->Cell(18, 10, 'GRADE', 1, 0, 'C');
  //   $this->Cell(25, 10, ' POINT', 1, 0, 'C');
  //   $this->Ln();
  // }

}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('P', 'A4', 0);
$pdf->header1($row,$entryDate,$bar);
// $pdf->headerTable();
// $pdf->viewTable();
$pdf->Output();
  

?>
