<?php

    $koneksi=mysqli_connect("localhost","root","","db_084");
    if (!$koneksi){
        echo "Koneksi Gagal";
    }

    $sql = "SELECT * FROM tbl_ari";
    $hasil = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>Ari Bagus Firmansyah</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>2104111000084</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td>PAW C</td>
        </tr>
    </table>
    <br><br>
    <a href ="tambah.php">Tambah Data</a>
    <br><br>
    <table border="1" width = 50%>
        <tr>
            <td><center>ID Mhs</center></td>
            <td><center>Nama Mhs</center></td>
            <td><center>Alamat Mhs</center></td>
            <td><center>Aksi</center><td>
        </tr>
        <?php while ($row= mysqli_fetch_array($hasil)){?>
            <tr>
                <td><center><?php echo $row['id_ari']?></center></td>
                <td><center><?php echo $row['nama_ari']?></center></td>
                <td><center><?php echo $row['alamat_ari']?></center></td>
                <td>
                    <a href="hapus.php?id=<?=$row['id_ari']?>">Hapus  || </a>
                    <a href="edit.php?id=<?=$row['id_ari']?>">Edit</a>
                </td>
            </tr>
        <?php }?>
    </table>
</body>
</html>