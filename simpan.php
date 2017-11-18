<?php
//redirect ke file index.php setelah menyimpan data 
header("location:index.php");

//memanggil file koneksi
include "koneksi.php";

//menampung data yang dikirim dari file index.php ke dalam variabel
$nama=$_POST['nama'];
$barang=$_POST['barang'];
$harga=$_POST['harga'];
$tanggal=$_POST['tanggal'];

//Script unyuk menyimpan data ke dalam tabel
$simpan="INSERT INTO datasiswa(nama,barang,harga,tanggal)VALUES('$nama','$barang','$harga','$tanggal')";
$sukses=mysql_query($simpan);

?>