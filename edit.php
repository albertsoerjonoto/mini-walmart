<?php
//memanggil file koneksi
include "koneksi.php";

//mendapatkan id_siswa dari 
$id=$_GET['id_siswa'];

$tampil="select * from datasiswa where id_siswa='$id'";
$hasil=mysql_query($tampil);

$d=mysql_fetch_array($hasil);
$nama=$d['nama'];
$barang=$d['barang'];
$harga=$d['harga'];
$tanggal=$d['tanggal'];

?>


<table width="300" align="center" border="0" cellpadding="5" cellspacing="2" bgcolor="#f2f2f2">

<form action="update.php" name="form1" method="post"  onsubmit="return tahan()">

<input type=hidden name=id value="<?php echo $id;?>">

<tr bgcolor="#e8e8e8">
<th colspan="2">FORM INPUT DATA PEMBELI</th>
</tr>

<tr>
<td>NAMA</td> <td><input type="text" name="nama" value="<?php echo $nama;?>" required></td>
</tr>
<tr>
<td>BARANG</td><td><select name="barang">
<option>Pilih Barang</option>
<option value="Air Mineral">Air Mineral</option>
<option value="Pembalut">Pembalut</option>
<option value="Sabun Mandi">Sabun Mandi</option>
<option value="Susu">Susu</option>
<option value="Sabun Cuci">Sabun Cuci</option>
<option value="Sikat Gigi">Sikat Gigi</option>
<option value="Pasta Gigi">Pasta Gigi</option>
<option value="Majalah">Majalah</option>
<option value="Baterai">Baterai</option>
</select></td>
<tr>

<tr>
<td>HARGA BARANG</td><td><input type="text" name="harga"   value="<?php echo $harga;?>" required></td>

<tr>
<td>TANGGAL PEMBELIAN</td><td><input type="text" name="tanggal"  value="<?php echo $tanggal;?>"required>&nbsp;(yyyy-mm-dd)</td> 
</tr>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="kirim" value="SIMPAN">
<input type="reset" name="batal" value="BATAL"></td>
</tr>
</form>
</table>



<table width="500" align="center" border="0" cellpadding="5" cellspacing="2" bgcolor="#ededed">

<tr bgcolor="#abcdef">
<th rowspan=2>NAMA</th>
<th rowspan=2>BARANG</th>
<th rowspan=2>HARGA BARANG</th>
<th colspan="2">AKSI</th>
</tr>

<tr bgcolor="#abcdef">
<th>EDIT</th>
<th>HAPUS</th>
</tr>


<br>
<?php

$tampil="SELECT * FROM datasiswa";
$hasil=mysql_query($tampil);

while($data=mysql_fetch_array($hasil)) {
echo "<tr bgcolor='#ffffff'><td align='center'>".$data['nama']."</td>";
echo "<td>".$data['barang']."</td>";
echo "<td>".$data['harga']."</td>";

echo "<th><a href='edit.php?id_siswa=$data[id_siswa]'>Edit</a></th>";
echo "<th><a href='hapus.php'>Hapus</a></th>";
echo "</tr>";
}
?>
</table>

