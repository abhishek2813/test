<?php 
if(!empty($_POST['submit'])){
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
   $class = $_POST['class'];
    $roll = $_POST['roll'];
    $phone = $_POST['phone'];
   // $email = $_POST['email'];
 require("fpdf184/fpdf.php");

 $pdf = new FPDF();
 $pdf->AddPage();
 $pdf->SetFont('Arial','',16);
 $pdf->Cell(0,10,'Id Card',1,1,'C');
 $pdf->Cell(40,10,"Name",1,0);
 $pdf->Cell(45,10,"Roll no",1,0);
 $pdf->Cell(45,10,"BIRTHDATE",1,0);
 $pdf->Cell(30,10,"class",1,0);
 $pdf->Cell(0,10,"phone No",1,1);

 $pdf->Cell(40,10,$name,1,0);
 $pdf->Cell(45,10,$roll,1,0);
 $pdf->Cell(45,10,$birthday,1,0);
 $pdf->Cell(30,10,$class,1,0);
 $pdf->Cell(0,10,$phone,1,0);
 //$pdf->Cell(40,10,$email,1,0);
 $file = $name.'.pdf';
 $pdf->output($file,'D');
    
}
?>
