<?php
require('mysql_table.php');


class PDF extends PDF_MySQL_Table
{
function Header()
{
	// Title
	$this->Image('logo.jpeg',-10,-6);
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'COMPLAINT REPORT',0,1,'C');
	$this->Ln(15);
	// Ensure table header is printed
	parent::Header();
}
}

// Connect to database
$link = mysqli_connect('localhost','u597185849_sabri','sabrinaFARHAN2k19','u597185849_hofo');

$pdf = new PDF();
$pdf->AddPage();

// Second table: specify 3 columns
$pdf->AddCol('Complaint Number',60,'','C');
$pdf->AddCol('Name',40,'','C');
$pdf->AddCol('Category',40,'','C');
$pdf->AddCol('Register Date',60,'','C');
$prop = array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table($link,'select tblcomplaints.complaintNumber as "Complaint Number",tblcomplaints.regDate as "Register Date",users.fullName as Name,category.categoryName as Category from tblcomplaints join users on users.id=tblcomplaints.userId join category on category.id=tblcomplaints.category',$prop);
$pdf->Output('../admin/pdf.php', 'I');
?>