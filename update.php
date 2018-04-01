<?php
//redirect ke halaman index.php setelah menyimpan perubahan
header("location:index.php");

//memanggil file koneksi.php
include "koneksi.php";


$id=$_POST['id'];

$nama=$_POST['nama'];
$barang=$_POST['barang'];
$harga=$_POST['harga'];
$tanggal=$_POST['tanggal'];

$simpan="UPDATE datasiswa SET nama='$nama', barang='$barang', harga='$harga', tanggal='$tanggal' WHERE id_siswa='$id'";

 
$sukses=mysql_query($simpan);


?>