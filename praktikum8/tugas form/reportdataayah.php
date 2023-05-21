<html>
<?php

include('koneksi.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nama Ayah');
$sheet->setCellValue('C1', 'Tahun Lahir Ayah');
$sheet->setCellValue('D1', 'Pendidikan Ayah');
$sheet->setCellValue('E1', 'Pekerjaan Ayah');
$sheet->setCellValue('F1', 'Penghasilan Ayah');
$sheet->setCellValue('G1', 'Kebutuhan Khusus Ayah');

$query = mysqli_query($koneksi, "SELECT * FROM data_ayah_kandung");
$i = 2;
$no = 1;

while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $row['id']);
    $sheet->setCellValue('B' . $i, $row['nama_ayah']);
    $sheet->setCellValue('C' . $i, $row['tahun_lahir_ayah']);
    $sheet->setCellValue('D' . $i, $row['pendidikan_ayah']);
    $sheet->setCellValue('E' . $i, $row['pekerjaan_ayah']);
    $sheet->setCellValue('F' . $i, $row['penghasilan_ayah']);
    $sheet->setCellValue('G' . $i, $row['kebutuhan_khusus_ayah']);
    $i++;
}

$styleArray = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['argb' => '000000'],
        ],
    ],
];

$i = $i - 1;
$sheet->getStyle('A1:G' . $i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Ayah.xlsx');
header("Location: formpesertadidik.php");
exit;
?>