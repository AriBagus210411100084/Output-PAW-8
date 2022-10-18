<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_084");

$id_ari = $_POST['id_ari'];
$nama_ari = $_POST['nama_ari'];
$alamat_ari = $_POST['alamat_ari'];

$sql = "INSERT INTO tbl_ari VALUES('$id_ari','$nama_ari','$alamat_ari')";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "Eksekusi gagal";
}else{
    echo "Eksekusi tambah data berhasil<br>";
    echo "<a href ='tampil.php'>Show data</a>";
}

?>