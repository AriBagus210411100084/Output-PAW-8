<?php

$koneksi = mysqli_connect("localhost","root","","db_084");
$id = $_GET['id'];
$sql ="SELECT * FROM tbl_ari WHERE id_ari=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "Query salah";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <p>Silahkan ubah data dibawah ini:</p>
    <?php 
    while ($row= mysqli_fetch_array($hasil))
    {
    ?>
    <form method="post" action="actionedit.php">
        ID Mhs   : <input type ="hidden" name="id_ari" value="<?php echo $row['id_ari']?>"><br>
        <br>
        Nama Mhs : <input type ="text" name="nama_ari" value="<?php echo $row['nama_ari']?>"><br>
        <br>
        Alamat Mhs : <input type ="text" name="alamat_ari" value="<?php echo $row['alamat_ari']?>"><br>
        <br>
        <button type="submit">submit</button>
    </form>
    <?php }?>
</body>
</html>