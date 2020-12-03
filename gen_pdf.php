<?php

require('pdf/tfpdf.php');

  $connect = mysqli_connect("localhost", "root", "root", "progr")or die("Невозможно подключиться к серверу");
  mysqli_query($connect, "SET NAMES utf8");

$result = mysqli_query($connect, "SELECT a.title, a.version, d.nominal, d.city, p.vipl, p.type FROM app a INNER JOIN  developer d ON a.id_d = d.id JOIN progrlanguages p ON a.id_yaz=p.id");
  $i = 0;
  while ($row = mysqli_fetch_array($result)){

    $number[$i] = $i+1;
    $title[$i] = $row['title'];
    $version[$i] = $row['version'];
    $nominal[$i] = $row['nominal'];
    $city[$i] = $row['city'];
 $vipl[$i] = $row['vipl'];
 $type[$i] = $row['type'];
    $i++;
  }

$pdf = new tFPDF();
$pdf->AddPage();

// Add a Unicode font (uses UTF-8)
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',14);


$txt = "Приложения";

$pdf->SetFont('DejaVu','','28');
$pdf->Cell(199, 10, $txt, 15,0,'C');
$pdf->Ln();
$pdf->Ln();
 
 $pdf->SetFont('DejaVu','','12');
 $pdf->SetFillColor(135, 206, 250);
 $pdf->SetTextColor(0);
 $pdf->SetDrawColor(25, 25, 112);
 $pdf->SetLineWidth(.3);
 
 $pdf->Cell(6,12,"№",1,0,'C',true);
 $pdf->Cell(35,12,"Название",1,0,'C',true);
 $pdf->Cell(18,12,"Версия",1,0,'C',true);
 $pdf->Cell(30,12,"Разработчик",1,0,'C',true);
 $pdf->Cell(27,12,"Город",1,0,'C',true);
 $pdf->Cell(37,12,"Тип выполнения",1,0,'C',true);
 $pdf->Cell(40,12,"Комп./Интр.",1,0,'C',true);
 $pdf->Ln();
 
$pdf->SetFillColor(255, 255, 255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
 
$fill = true;
 
foreach($number as $i)
  {
    $pdf->SetFont('DejaVu','','10');
        $pdf->Cell(6,6, $i, 1, 0,'C',$fill);
        $pdf->Cell(35,6, $title[$i-1], 1, 0,'L',$fill);
        $pdf->Cell(18,6, $version[$i-1], 1, 0,'C',$fill);
        $pdf->Cell(30,6, $nominal[$i-1], 1, 0,'C',$fill);
        $pdf->Cell(27,6, $city[$i-1], 1, 0,'C',$fill);
$pdf->Cell(37,6, $vipl[$i-1], 1, 0,'C',$fill);
$pdf->Cell(40,6, $type[$i-1], 1, 0,'C',$fill);
        $pdf->Ln();
        $fill =! $fill;
    }
    $pdf->Cell(180,0,'','T');

$pdf->Output();
?>