<?php
include "koneksi.php";
$nik = $_GET['NIK'];
mysqli_query($koneksi,"DELETE FROM tbl_siswa WHERE NIK='$nik'");
header("location:index.php");
?>