<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <h1>LATIHAN CRUD WEB PHP</h1>
    <h3><a href="insert.php">Tambah Data</a></h3>
        <table border="1">
            <tr>
                <td>NIK</td>
                <td>Nama</td>
                <td>Gender</td>
                <td>Alamat</td>
                <td>Umur</td>
                <td>Jurusan</td>
                <td colspan="2">Aksi</td>
            </tr>
<?php
include 'koneksi.php';
$data = mysqli_query($koneksi,"SELECT * FROM tbl_siswa");
while ($a = mysqli_fetch_array($data)) {
    ?>
            <tr>
                <td><?=$a['nik'];?></td>
                <td><?=$a['nama'];?></td>
                <td><?=$a['gender'];?></td>
                <td><?=$a['alamat'];?></td>
                <td><?=$a['umur'];?></td>
                <td><?=$a['jurusan'];?></td>
                <td><a href="update.php?nik=<?=$a['nik']?>">EDIT</a></td>
                <td><a href="delete.php?nik=<?=$a['nik']?>">DELETE</a></td>
            </tr>
<?php
}
?>
        </table>
</body>
</html>