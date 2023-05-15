<?php
include 'koneksi.php';

$nama   = $_POST['nama'];
$email  = $_POST['email'];
$pesan  = $_POST['pesan'];
$web    = $_POST['web'];
$telp   = $_POST['telp'];

$query = "INSERT INTO formval SET nama='$nama', email='$email', pesan='$pesan', web='$web', telp='$telp'";
mysqli_query($koneksi, $query);

header("location:formvalidation.php");
?>