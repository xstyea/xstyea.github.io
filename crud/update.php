<?php
include 'koneksi.php';
$nik = $_GET['nik'];
$data = mysqli_query($koneksi,"SELECT * FROM tbl_siswa WHERE nik='$nik'");
$ubah = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
</head>
<body>
    <h1>UPDATE DATA SISWA</h1>
    <form action="edit_proses.php" method="post">
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><input type="number" name="nik" value="<?=$ubah['nik'];?>"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?=$ubah['nama'];?>"></td>
            </tr>
            <tr>
                <td>GENDER</td>
                <td>:</td>
                <td><input type="text" name="gender" value="<?=$ubah['gender'];?>"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><input type="text" name="alamat"  value="<?=$ubah['alamat'];?>"></td>
            </tr>
            <tr>
                <td>UMUR</td>
                <td>:</td>
                <td><input type="number" min=0 max=999 name="umur" value="<?=$ubah['umur'];?>"></td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>:</td>
                <td><input type="text" name="jurusan" value="<?=$ubah['jurusan'];?>"></td>
            </tr>
            <tr>
                <td><input type="submit"><input type="reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>