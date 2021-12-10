<?php
// memasukkan koneksi.php agar bisa terhubung dengan database
include "koneksi.php";
//membuat query menampilkan seluruh data mahasiswa di database lalu disimpan di $result
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ");
?>
<html>
<head>
<title>Halaman Utama</title>
</head>
<body>
	<a href="tambah.php">Tambah Data Baru</a>
	<a href="lap_mhs.php">Cetak</a>
	<br/><br/>
	<!-- membuat tabel dengan panjang 80% dan border nya 1 -->
	<table width='80%' border=1>
	<tr>
	<!-- membuat header tabel Nim,Nama,Gender,Alamat,Tanggal Lahir dan Update -->
	<th>Nim</th> 
	<th>Nama</th> 
	<th>Gender</th> 
	<th>Alamat</th>
	<th>tgl lahir</th> 
	<th>Update</th>
	</tr>
	<?php
	//membuat perulangan dengan paramaternya mysqli_fetch_array()
	//mysqli_fetch_array() berfungsi untuk mengambil data MysQL pada query $result sebelumnya
	while($user_data = mysqli_fetch_array($result)) { 
		echo "<tr>";
		//menampilkan data mahasiswa dlaam database
		echo "<td>".$user_data['nim']."</td>"; 
		echo "<td>".$user_data['nama']."</td>";
		echo "<td>".$user_data['jkel']."</td>"; 
		echo "<td>".$user_data['alamat']."</td>";
		echo "<td>".$user_data['tgllhr']."</td>";
		//membuat link href untuk pindah kehalaman edit.php dan hapus.php
		echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='hapus.php?nim=$user_data[nim]'>Delete</a></td></tr>";
	}
	?>
	</table>
</body>
</html>
