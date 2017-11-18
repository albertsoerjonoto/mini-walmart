<?php
//redirect ke halaman index.php setelah menghapus data
header("location:index.php");

//memanggil file koneksi.php
include "koneksi.php";

//mendapatkan id_siswa sesuai id_siswa yang dipilih
$id=$_GET['id_siswa'];

//script untuk menghapus data sesuai id_siswa yang dipilih
$hapus="DELETE from datasiswa WHERE id_siswa='$id'";
$sukses=mysql_query($hapus);

?>