<html>
    <?php

include('koneksi.php');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nama Ibu');
$sheet->setCellValue('C1', 'Tahun Lahir Ibu');
$sheet->setCellValue('D1', 'Pendidikan Ibu');
$sheet->setCellValue('E1', 'Pekerjaan Ibu');
$sheet->setCellValue('F1', 'Penghasilan Ibu');
$sheet->setCellValue('G1', 'Kebutuhan Khusus Ibu');

$query = mysqli_query($koneksi, "SELECT * FROM data_ibu_kandung");
$i = 2;

while ($row = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $i, $row['id']);
    $sheet->setCellValue('B' . $i, $row['nama_ibu']);
    $sheet->setCellValue('C' . $i, $row['tahun_lahir_ibu']);
    $sheet->setCellValue('D' . $i, $row['pendidikan_ibu']);
    $sheet->setCellValue('E' . $i, $row['pekerjaan_ibu']);
    $sheet->setCellValue('F' . $i, $row['penghasilan_ibu']);
    $sheet->setCellValue('G' . $i, $row['kebutuhan_khusus_ibu']);
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
$writer->save('Report Data Ibu.xlsx');

header("Location: formpesertadidik.php");
exit;
?>
