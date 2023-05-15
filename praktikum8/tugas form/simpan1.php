<?php
// mengambil koneksi ke database
include("koneksi.php");

// mengambil data dari form pendaftaran
$jenis_pendaftaran = $_POST["jenis_pendaftaran"];
$tanggal_masuk = $_POST["tanggal_masuk"];
$nis = $_POST["nis"];
$nomer_peserta_ujian = $_POST["nomer_peserta_ujian"];
$pernah_paud = $_POST["pernah_paud"];
$pernah_tk = $_POST["pernah_tk"];
$no_seri_skhun = $_POST["no_seri_skhun"];
$no_seri_ijazah = $_POST["no_seri_ijazah"];
$hobi = $_POST["hobi"];
$cita_cita = $_POST["cita_cita"];

// memasukkan data ke dalam tabel siswa
$sql_siswa = "INSERT INTO siswa (jenis_pendaftaran, tanggal_masuk, nis, nomer_peserta_ujian, pernah_paud, pernah_tk, no_seri_skhun, no_seri_ijazah, hobi, cita_cita) 
            VALUES ('$jenis_pendaftaran', '$tanggal_masuk', '$nis', '$nomer_peserta_ujian', '$pernah_paud', '$pernah_tk', '$no_seri_skhun', '$no_seri_ijazah', '$hobi', '$cita_cita')";

// mengambil data dari form data pribadi
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
$kewarganegaraan = $_POST['kewarganegaraan'];
$nama_negara = $_POST['nama_negara'];

// memasukkan data ke dalam tabel data_pribadi
$sql_data_pribadi = "INSERT INTO data_pribadi (nama_lengkap, jenis_kelamin, nisn, nik, tempat_lahir, tanggal_lahir, agama, berkebutuhan_khusus, alamat_jalan, rt, rw, nama_dusun, kelurahan_desa, kewarganegaraan, nama_negara) 
                    VALUES ('$nama_lengkap', '$jenis_kelamin', '$nisn', '$nik', '$tempat_lahir', '$tanggal_lahir', '$agama', '$berkebutuhan_khusus', '$alamat_jalan', '$rt', '$rw', '$nama_dusun', '$kelurahan_desa', '$kewarganegaraan', '$nama_negara')";

// mengambil data dari form data ayah dan ibu
$nama_ayah = $_POST['nama_ayah'] ?? '';
$tahun_lahir_ayah = $_POST['tahun_lahir_ayah'] ?? '';
$pendidikan_ayah = $_POST['pendidikan_ayah'] ?? '';
$pekerjaan_ayah = isset($_POST['pekerjaan_ayah']) ? $_POST['pekerjaan_ayah'] : '';
$penghasilan_ayah = $_POST['penghasilan_ayah'] ?? '';
$kebutuhan_khusus_ayah = $_POST['kebutuhan_khusus_ayah'] ?? '';

$nama_ibu = $_POST['nama_ibu'] ?? '';
$tahun_lahir_ibu = $_POST['tahun_lahir_ibu'] ?? '';
$pendidikan_ibu = $_POST['pendidikan_ibu'] ?? '';
$pekerjaan_ibu = isset($_POST['pekerjaan_ibu']) ? $_POST['pekerjaan_ibu'] : '';
$penghasilan_ibu = $_POST['penghasilan_ibu'] ?? '';
$kebutuhan_khusus_ibu = $_POST['kebutuhan_khusus_ibu'] ?? '';

// query untuk menyimpan data ayah ke database
$sql_ayah = "INSERT INTO data_ayah_kandung (nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah) VALUES ('$nama_ayah', '$tahun_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$kebutuhan_khusus_ayah')";

// query untuk menyimpan data ibu ke database
$sql_ibu = "INSERT INTO data_ibu_kandung (nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu) VALUES ('$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$kebutuhan_khusus_ibu')";

// Memasukkan data ke dalam tabel menggunakan query INSERT
if(mysqli_query($koneksi, $sql_siswa) && mysqli_query($koneksi, $sql_data_pribadi) && mysqli_query($koneksi, $sql_ayah) && mysqli_query($koneksi, $sql_ibu)) {
    echo "Data berhasil dimasukkan ke dalam 4 tabel";
} else {
    echo "Data gagal dimasukkan: " . mysqli_error($koneksi);
}

$koneksi->close();
?>