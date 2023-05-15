<?php
// mengambil data dari form
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$berkebutuhan_khusus = $_POST['berkebutuhan_khusus'];
$alamat_jalan = $_POST['alamat_jalan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$nama_dusun = $_POST['nama_dusun'];
$kelurahan_desa = $_POST['kelurahan_desa'];

// menyimpan data ke database
$sql = "INSERT INTO data_pribadi (nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat_jalan, rt, rw, nama_dusun, kelurahan_desa) VALUES ('$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat_jalan', '$rt', '$rw', '$nama_dusun', '$kelurahan_desa')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// menutup koneksi
mysqli_close($conn);
?> 