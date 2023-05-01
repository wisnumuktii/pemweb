<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pegawai";

// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check Connection
if (!$conn) {
    die("Connection failed : " . mysqli_connect_error());
}

$sql = "UPDATE pegawai 
SET nama = 'Wisnu Mukti Darwansah', gaji = '2000000'
WHERE id = 1";

if (mysqli_query($conn, $sql)) {
    echo "Update Berhasil";
} else {
    echo "Error : " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);