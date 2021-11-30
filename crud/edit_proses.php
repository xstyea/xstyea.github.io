<?php
include "koneksi.php";

$nik        = $_POST['nik'];
$nama       = $_POST['nama'];
$gender     = $_POST['gender'];
$alamat     = $_POST['alamat'];
$umur       = $_POST['umur'];
$jurusan    = $_POST['jurusan'];

mysqli_query($koneksi,"UPDATE tbl_siswa SET nama='$nama', gender='$gender', alamat='$alamat', umur='$umur', jurusan='$jurusan' WHERE nik='$nik'");

header("location:index.php");
?>