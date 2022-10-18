<?php
$koneksi = mysqli_connect("localhost","root","","db_084");

$id_ari = $_POST['id_ari'];
$nama_ari = $_POST['nama_ari'];
$alamat_ari = $_POST['alamat_ari'];

$sql ="UPDATE tbl_ari SET
        nama_ari = '$nama_ari',
        alamat_ari = '$alamat_ari'
        WHERE id_ari=$id_ari";
$hasil = mysqli_query($koneksi, $sql);
if(!$hasil){
    echo "Eksekusi gagal";
}else{
    echo "Eksekusi edit data berhasil<br>";
    echo "<a href ='tampil.php'>Show data</a>";
}

?>