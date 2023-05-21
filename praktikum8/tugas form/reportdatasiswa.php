<html>

<?php

include('koneksi.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Jenis Pendaftaran');
$sheet->setCellValue('C1', 'Tanggal Masuk');
$sheet->setCellValue('D1', 'NIS');
$sheet->setCellValue('E1', 'Nomor Peserta Ujian');
$sheet->setCellValue('F1', 'Pernah PAUD');
$sheet->setCellValue('G1', 'Pernah TK');
$sheet->setCellValue('H1', 'No. Seri SKHUN');
$sheet->setCellValue('I1', 'No. Seri Ijazah');
$sheet->setCellValue('J1', 'Hobi');
$sheet->setCellValue('K1', 'Cita-cita');

$query = mysqli_query($koneksi, "SELECT * FROM siswa");
$i = 2;
$no = 1;

while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $no++);
    $sheet->setCellValue('B' . $i, $row['jenis_pendaftaran']);
    $sheet->setCellValue('C' . $i, $row['tanggal_masuk']);
    $sheet->setCellValue('D' . $i, $row['nis']);
    $sheet->setCellValue('E' . $i, $row['nomer_peserta_ujian']);
    $sheet->setCellValue('F' . $i, $row['pernah_paud']);
    $sheet->setCellValue('G' . $i, $row['pernah_tk']);
    $sheet->setCellValue('H' . $i, $row['no_seri_skhun']);
    $sheet->setCellValue('I' . $i, $row['no_seri_ijazah']);
    $sheet->setCellValue('J' . $i, $row['hobi']);
    $sheet->setCellValue('K' . $i, $row['cita_cita']);
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
$sheet->getStyle('A1:K' . $i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Siswa.xlsx');
header("Location: formpesertadidik.php");
exit;
?>
