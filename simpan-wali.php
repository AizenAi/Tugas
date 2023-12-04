<?php
include 'koneksi.php';
$id_wali = $_POST['id'];
$nama_wali = $_POST['namawali'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamatwali'];
$query="INSERT INTO wali_mhs SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi, $query);
header("location:index.php")
?>