<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_084");
$id=$_GET['id'];

$sql="DELETE FROM tbl_ari WHERE id_ari=$id";
$hasil=mysqli_query($koneksi,$sql);

if (!$hasil){
    echo "Delete data gagal";
}else{
    echo "Data Berhasil di hapus <br>";
    echo "<a href='tampil.php'> Show Data</a>";
}

?>