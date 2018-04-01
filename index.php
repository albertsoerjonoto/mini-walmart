<?php
include "koneksi.php";
?>
<script language="JavaScript">
function senyum() {
    alert("Data telah tersimpan, Jangan lupa beri senyum terhadap customer!");
}
</script>
<style>
body{
	background:#81DAF5;
	
}
#header{
	background:#0080C0;
	color:Gold;
	padding:20px;
	text-align:center;
	font-size:60px;
	font-weight:bold;
	
}

#footer{
	background:#81DAF5;
	color:black;
	padding:10px;
	text-align:center;
	bottom:0;
	width:100%;
	
		
}
</style>
<div id="header">
<img src="img/saving.png"alt="Saving" style="width:200px;height:100px;">
<marquee><img src="img/cc.png" alt="Canisius" style="width:40px;height:45px;">&nbsp;&nbsp;&nbsp;CC MART
&nbsp;&nbsp;<img src="img/gerobak.png" alt="Canisius" style="width:50px;height:45px;"></marquee>

</div>
<br />
<table width="500" align="center" border="0" cellpadding="5" cellspacing="2" bgcolor="#f2f2f2">

<form action="simpan.php" name="form1" method="post"  onsubmit="return tahan()">

<tr bgcolor="#58ACFA">
<th colspan="2">FORM INPUT DATA PEMBELI</th>
</tr>

<tr>
<td>NAMA</td> <td><input type="text" name="nama" required></td>
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
<option value="Indomie">Indomie</option>
<option value="Cadbury">Cadbury</option>
<option value="Voucher Pulsa">Voucher Pulsa</option>
</select></td>

<tr>
<td>HARGA BARANG</td><td><input type="text" name="harga" required></td>
<tr>

<tr>
<td>TANGGAL PEMBELIAN</td><td><input type="text" name="tanggal" required>&nbsp;(yyyy-mm-dd)</td>
</tr>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="kirim" value="SIMPAN" onclick="senyum()">
<input type="reset" name="batal" value="BATAL"></td>
</tr>
</form>
</table>



<table width="700" align="center" border="0" cellpadding="5" cellspacing="2" bgcolor="#ededed">

<tr bgcolor="#abcdef">
<th rowspan=2>NO</th>
<th rowspan=2>NAMA</th>
<th rowspan=2>BARANG</th>
<th rowspan=2>HARGA BARANG</th>
<th rowspan=2>TANGGAL</th>

<th colspan="2">AKSI</th>
</tr>

<tr bgcolor="#abcdef">
<th>EDIT</th>
<th>HAPUS</th>
</tr>


<br>
<?php
//Script untuk menampilkan data dari tabel datasiswa
$tampil="SELECT * FROM datasiswa";
$hasil=mysql_query($tampil);

$no=1;
while($data=mysql_fetch_array($hasil)) {

    $nama=$data['nama'];
	$barang=$data['barang'];
	$harga=$data['harga'];
	$tanggal=$data['tanggal'];
	
echo "<tr bgcolor='#ffffff'><td align='center'>$no</td>";
echo "<td align='center'>$nama</td>";
echo "<td>$barang</td>";
echo "<td align=center>IDR $harga</td>";
echo "<td>$tanggal</td>";

echo "<th><a href='edit.php?id_siswa=$data[id_siswa]'>Edit</a></th>";
echo "<th><a href='hapus.php?id_siswa=$data[id_siswa]'>Hapus</a></th>";
echo "</tr>";
$no++;
}
?>
</table>

<br />
<div id="footer">Created by: Albert Suryonoto XIIA4/01 - Albert Tjandra XIIA4/02 - Alesandro Setyo Anggito U. XIIA4/03 - Alvin Putra XIIA4/04 - Andrew Dwijanto XIIA4/05
<br><br><br><br> Sponsored by: <br>
 <img src="img/walmart.png" alt="Walmart" style="width:150px;height:50px;"></div>