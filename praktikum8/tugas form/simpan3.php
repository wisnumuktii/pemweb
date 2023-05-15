<?php

// ambil data dari form
$nama_ayah = $_POST['nama_ayah'];
$tahun_lahir_ayah = $_POST['tahun_lahir_ayah'];
$pendidikan_ayah = $_POST['pendidikan_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$penghasilan_ayah = $_POST['penghasilan_ayah'];
$kebutuhan_khusus_ayah = $_POST['kebutuhan_khusus_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_ibu = $_POST['penghasilan_ibu'];
$kebutuhan_khusus_ibu = $_POST['kebutuhan_khusus_ibu'];

// query untuk menyimpan data ayah ke database
$sql = "INSERT INTO data_ayah_kandung (nama_ayah, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah) VALUES ('$nama_ayah', '$tahun_lahir_ayah', '$pendidikan_ayah', '$pekerjaan_ayah', '$penghasilan_ayah', '$kebutuhan_khusus_ayah')";

if (mysqli_query($conn, $sql)) {
    echo "Data ayah berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// query untuk menyimpan data ibu ke database
$sql = "INSERT INTO data_ibu_kandung (nama_ibu, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu) VALUES ('$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_ibu', '$kebutuhan_khusus_ibu')";

if (mysqli_query($conn, $sql)) {
    echo "Data ibu berhasil disimpan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// tutup koneksi
mysqli_close($conn);

?>
