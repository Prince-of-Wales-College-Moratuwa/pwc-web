<?php
require('fpdf/fpdf.php');

include('../resources/db_con.php');

$ref = isset($_GET['ref']) ? $_GET['ref'] : null;


$sql = "SELECT * FROM pwc_db_al25 WHERE Reference_no = $ref";
$result = mysqli_query($db, $sql);

$pdf = new FPDF();
$pdf->AddPage('P','A4');
$pdf->SetMargins(10, 1, 5);
$pdf->SetAutoPageBreak(true, 7);

$pdf->AddFont('helvetica', '', 'helvetica.php');

while ($row = mysqli_fetch_assoc($result)) {
    $refno = $row['Reference_no'];
    $stream = $row['Stream'];
    $Subject = $row['Subject'];
    $almedium = $row['almedium'];
    $pwc_Other = $row['pwc_Other'];
    $SchoolIndexNo = $row['SchoolIndexNo'];
    $School_Private_Candidate = $row['School_Private_Candidate'];
    $School = $row['School'];
    $S_District = $row['S_District'];
    $Name = $row['Name'];
    $Name_with_Initials = $row['Name_with_Initials'];
    $Birthday = $row['Birthday'];
    $NIC = $row['NIC'];
    $Address1 = $row['Address1'];
    $Address2 = $row['Address2'];
    $City = $row['City'];
    $Guardian_Name = $row['Guardian_Name'];
    $ResidentialNo = $row['ResidentialNo'];
    $Mobile1 = $row['Mobile1'];
    $Mobile2 = $row['Mobile2'];
    $E_mail = $row['E_mail'];
    $Distance = $row['Distance'];
    $Transport = $row['Transport'];
    $IndexNo = $row['IndexNo'];
    $olMedium = $row['olMedium'];
    $Religion = $row['Religion'];
    $Sinhala = $row['Sinhala'];
    $English = $row['English'];
    $Science = $row['Science'];
    $Mathematics = $row['Mathematics'];
    $History = $row['History'];
    $Optional1 = $row['Optional1'];
    $Result1 = $row['Result1'];
    $Optional2 = $row['Optional2'];
    $Result2 = $row['Result2'];
    $Optional3 = $row['Optional3'];
    $Result3 = $row['Result3'];


$pdf->SetFont('Arial', 'B', 16); 
$pdf->Cell(0, 7, "Application for 2025 Advanced Level Admission Registration", 0, 1, 'C'); 
$pdf->Cell(0, 7, "Prince of Wales' College, Moratuwa", 0, 1, 'C'); 
$pdf->Cell(0, 8, "$stream Stream", 0, 1, 'C'); 
$pdf->SetLineWidth(0.2); 
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());  
$pdf->Ln();

$pdf->SetFont('Arial', '', 11); 
// Subjects wish to apply
$pdf->Cell(0, 7, "1. Subjects wish to apply: $Subject | Medium: $almedium", 0, 1);
$pdf->Cell(0, 10, "2. Are you a student of Prince of Wales' College: $pwc_Other", 0, 1);

if ($pwc_Other == "Yes") {
    $pdf->Cell(0, 10, "3. School Admission Number: $SchoolIndexNo ", 0, 1);
} else {
    $pdf->Cell(0, 10, "3. Name of the School studied GCE O/L: $School | District: $S_District", 0, 1);
}



$pdf->SetFont('Arial', '', 11); 
// Full Name
$pdf->Cell(0, 10, "4. Full Name: $Name", 0, 1);

// Name with Initials
$pdf->Cell(0, 10, "5. Name with Initials: $Name_with_Initials", 0, 1);

// Birthday 
$pdf->Cell(0, 10, "6. Birthday: $Birthday | National Identity Card No. (if any): $NIC", 0, 1);


// Personal Address
$pdf->Cell(0, 10, "7. Personal Address: $Address1, $Address2, $City", 0, 1);
$pdf->Cell(0, 10, "8. Distance to the Prince of Wales' College from your Place (in Km): $Distance | Mode of Transport: $Transport", 0, 1);
$pdf->Cell(0, 10, "9. Email address (if any): $E_mail", 0, 1);
$pdf->Cell(0, 10, "10. Father/Mother/Guardian's Name: $Guardian_Name", 0, 1);
$pdf->Cell(0, 10, "11. Contact No.: $ResidentialNo, $Mobile1, $Mobile2", 0, 1);


$pdf->Cell(0, 10, 'GCE Ordinary Level Examination', 0, 1, 'C');

// Index Number
$pdf->Cell(0, 10, "12. Examination Index Number: $IndexNo | Medium: $olMedium", 0, 1);
$pdf->Cell(0, 10, "     1. Religion: $Religion        2. Sinhala: $Sinhala    3. English: $English", 0, 1);
$pdf->Cell(0, 10, "     4. Science: $Science        5. Maths: $Mathematics      6. History: $History", 0, 1);
$pdf->Cell(0, 10, "     7. $Optional1: $Result1     8. $Optional2: $Result2     9. $Optional3: $Result3", 0, 1);
}
$pdf->Ln();

$pdf->Cell(0, 10, "13. I hereby certified that the above mentioned information is true and accurate", 0, 1);
$pdf->Cell(0, 12, ".............................", 0, 1);
$pdf->Cell(0, 2, "Signature", 0, 1);

$pdf->Cell(0, 10, 'Staff Only', 0, 1, 'C');
$pdf->Cell(0, 10, "....................................................................................................................................................................................", 0, 1);
$pdf->Cell(0, 10, "....................................................................................................................................................................................", 0, 1);
$pdf->Cell(0, 10, "....................................................................................................................................................................................", 0, 1);


$pdf->SetFont('helvetica', '', 8);
// Add content to the footer
$pdf->Cell(0, 10, "Referance No: $refno | https://princeofwales.edu.lk", 0, 0, 'C');

// Output the PDF
$pdf->Output("$refno - Application for AL Admission Registration Prince of Wales' College.pdf", 'D');

?>
