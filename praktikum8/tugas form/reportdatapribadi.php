<html>
<?php

include('koneksi.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nama Lengkap');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal Lahir');
$sheet->setCellValue('H1', 'Agama');
$sheet->setCellValue('I1', 'Berkebutuhan Khusus');
$sheet->setCellValue('J1', 'Alamat Jalan');
$sheet->setCellValue('K1', 'RT');
$sheet->setCellValue('L1', 'RW');
$sheet->setCellValue('M1', 'Nama Dusun');
$sheet->setCellValue('N1', 'Kelurahan/Desa');
$sheet->setCellValue('O1', 'Kewarganegaraan');
$sheet->setCellValue('P1', 'Nama Negara');

$query = mysqli_query($koneksi, "SELECT * FROM data_pribadi");
$i = 2;
$id = 1;

while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $id++);
    $sheet->setCellValue('B' . $i, $row['nama_lengkap']);
    $sheet->setCellValue('C' . $i, $row['jenis_kelamin']);
    $sheet->setCellValue('D' . $i, $row['nisn']);
    $sheet->setCellValue('E' . $i, $row['nik']);
    $sheet->setCellValue('F' . $i, $row['tempat_lahir']);
    $sheet->setCellValue('G' . $i, $row['tanggal_lahir']);
    $sheet->setCellValue('H' . $i, $row['agama']);
    $sheet->setCellValue('I' . $i, $row['berkebutuhan_khusus']);
    $sheet->setCellValue('J' . $i, $row['alamat_jalan']);
    $sheet->setCellValue('K' . $i, $row['rt']);
    $sheet->setCellValue('L' . $i, $row['rw']);
    $sheet->setCellValue('M' . $i, $row['nama_dusun']);
    $sheet->setCellValue('N' . $i, $row['kelurahan_desa']);
    $sheet->setCellValue('O' . $i, $row['kewarganegaraan']);
    $sheet->setCellValue('P' . $i, $row['nama_negara']);
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
$sheet->getStyle('A1:P' . $i)->applyFromArray($styleArray);

$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pribadi.xlsx');
header("Location: formpesertadidik.php");
exit;
?>