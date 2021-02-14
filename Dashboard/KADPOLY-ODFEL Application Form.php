<?php 
require_once('classes/autoloader.php');
require "fpdf.php";
$operation = new ApplicantView();
$operation->applicant_controll_access();
$data = $operation->viewAllApplicantInfo($_SESSION['AppID']);
$row = mysqli_fetch_assoc($data);

if ($row["PICTURE"]=="") {

  $pic = "user-icon.jpg";
  # code...
}else{
  $pic = $row["PICTURE"];
}

$qr = $row["APPID"];

$date = new DateTime($row["DATE"]);
$entryDate = $date->format('d M, Y');

$date1 = new DateTime($row["DOB"]);
$dob = $date->format('d M, Y');

       
        require_once 'myqrcode.php';
$bar = $PNG_WEB_DIR.basename($filename);
class myPDF extends FPDF{

  function header1($row,$entryDate,$dob,$bar, $pic){
    //    $sql2=mysqli_query($connection,"SELECT * FROM result
    // WHERE result.regno='".$_SESSION['reg']."'
    // ");
    // while ($row = mysqli_fetch_array($sql2)) {
    // $name=$row["student"];
    // $regno=$row["regno"];
    // $level=$row["level"];
    // $semester=$row["semester"];
    // }
    
    $this->Image('./assets/img/kadpoly.png', 7, 10);
    $this->SetFont('Arial', 'B', 16);
    $this->Cell(190,7, 'KADUNA POLYTECHNIC',0,0,'C');
    $this->Ln();
    $this->SetFont('Arial', '', 10);
    $this->Cell(190,8, 'Polytechnic Road P.M.B 2021, Tudun Wada, Kaduna State',0,0,'C');
    $this->Image(''.$bar.'', 170, 8);
    $this->Ln();
    $this->SetFont('Arial', '', 10);
    $this->Cell(190,6, 'Telephone: +234(0)8180599505',0,0,'C');
    $this->Ln();
     $this->SetFont('Arial', 'B', 12);
    $this->Cell(190,10, 'ODFeL Application Form (2020/2021)',0,0,'C');
    $this->Ln();
    $this->SetDrawColor(188,188,188);
    $this->Ln();
    // $this->Cell(190,55, 
    //   $this->Image('uploads/IMG_20201124_174621_0~2.jpg', 13, 54, 40, 50)
    //  ,1,0,'L');
    // $this->Ln();

$this->SetFont('Arial', 'B', 10);
$this->Cell(190,9,'Personal Information', 1,1, 'C');
$this->Cell(60,54,$this->Image('uploads/'.$pic.'', 13, 62, 40, 49) , 1,0, 'C');
$x = $this->GetX();
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Application No:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(90,9, $row["APPID"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Email Address:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(90,9, $row["EMAIL"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Full Name:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(90,9, $row["FIRST_NAME"]." ".$row["LAST_NAME"]." ".$row["MIDDLE_NAME"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Gender:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(90,9, $row["GENDER"], 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Date of Birth:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(90,9, $dob, 1,1);
$this->SetX($x);
$this->SetFont('Arial', 'B', 10);
$this->Cell(40,9,'Phone No:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(90,9, $row["TELEPHONE"], 1,1);
$this->Ln();

$this->SetFont('Arial', 'B', 10);
$this->Cell(190,9,'Programme Details', 1,1, 'C');
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9, 'Programme', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9, $row["PROGRAMME"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Programme Type:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["PROGRAMME_NATURE"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Entry Level:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["ENTRY_LEVEL"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Date Applied:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9, $entryDate, 1,1);
$this->Ln();


$this->SetFont('Arial', 'B', 10);
$this->Cell(190,9,"O'level Details", 1,1, 'C');
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Number of Sittings:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9, $row["Sittings"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Examination Number:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["Exam_Number"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Examination Type:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["Exam_Type"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Examination Year:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["Exam_Year"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(190,5,"", 1,1, 'C');
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,  $row["Subject1"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,  $row["Grade1"], 1,1);
$this->SetFont('Arial','', 10);
$this->Cell(60,9,  $row["Subject2"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9, $row["Grade2"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9, $row["Subject3"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9, $row["Grade3"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,  $row["Subject4"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,  $row["Grade4"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9, $row["Subject5"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,  $row["Grade5"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9, $row["Subject6"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,  $row["Grade6"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,  $row["Subject7"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,  $row["Grade7"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,  $row["Subject8"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,  $row["Grade8"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9, $row["Subject9"].':', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,  $row["Grade9"], 1,1);
$this->Ln();







$this->SetFont('Arial', 'B', 10);
$this->Cell(190,9,'Contact Details', 1,1, 'C');
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'State:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9, $row["STATE"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'LGA:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["LGA"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Address:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["ADDRESS"], 1,1);
$this->Ln();

$this->SetFont('Arial', 'B', 10);
$this->Cell(190,9,'Referee Details', 1,1, 'C');
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Name:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["NOK_FIRST_NAME"]." ".$row["NOK_LAST_NAME"]." ".$row["NOK_MIDDLE_NAME"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Phone Number:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["NOK_PHONE"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Email:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["NOK_EMAIL"], 1,1);
$this->SetFont('Arial', 'B', 10);
$this->Cell(60,9,'Address:', 1,0);
$this->SetFont('Arial', '', 10);
$this->Cell(130,9,$row["NOK_ADDRESS"], 1,1);
$this->Ln();


$this->SetFont('Arial', 'B', 10);
$this->Cell(190,9,'DECLERATION', 0,0, 'L');
$this->Ln();
$this->SetFont('Arial', 'B', 10);
$this->Cell(195,9,'I '.$row["FIRST_NAME"]." ".$row["LAST_NAME"]." ".$row["MIDDLE_NAME"].', here by decleare and agree that:', 0,0, 'L');
$this->Ln();
$this->SetFont('Arial', '', 10);
$this->Cell(190,9,'a. All the informations on this form are, to the best of my knowledge, correct.', 0,0, 'L');
$this->Ln();
$this->SetFont('Arial', '', 10);
$this->Cell(190,9,'b: If admitted i shall regard my self bound by the regulation of the Kaduna Polytechnic', 0,0, 'L');
$this->Ln();
$this->SetFont('Arial', '', 10);
$this->Cell(190,9,'c. The Polytechnic is under no obligation to enter into correspondace with me regarding its decision on my application', 0,0, 'L');
$this->Ln();
$this->SetFont('Arial', '', 10);
$this->Cell(60,9,'d. I will agree to withdrawl form the polytechnic and to be prosecuted if it is discorvered at any point that the information ', 0,0, 'L');
$this->Ln();
$this->SetFont('Arial', '', 10);
$this->Cell(75,9,'    i have given on this application form is false or incorrect', 0,0, 'L');
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
$pdf->header1($row,$entryDate,$dob,$bar,$pic);
// $pdf->headerTable();
// $pdf->viewTable();
$pdf->Output();
  

?>
