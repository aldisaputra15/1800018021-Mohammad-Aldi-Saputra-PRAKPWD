<?php
	// memasukkan koneksi.php agar bisa terhubung dengan database
	include "koneksi.php";
?>
<html>
<head>
<title>Tambah data mahasiswa</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
	<!-- membuat form menggunakan metode POST -->
	<form action="tambah.php" method="post" name="form1">
	<!-- membuat tabel dengan panjang 25% dan border nya 0 -->
	<table width="25%" border="0">
	<tr>
	<td>Nim</td>
	<!-- membuat form untuk mengisikan nim -->
	<td><input type="text" name="nim"></td>
	</tr>
	<tr>
	<td>Nama</td>
	<!-- membuat form untuk mengisikan nama -->
	<td><input type="text" name="nama"></td>
	</tr>
	<tr>
	<td>Gender (L/P)</td>
	<!-- membuat form untuk mengisikan jenis kelamin -->
	<td><input type="text" name="jkel"></td>
	</tr>
	<tr>
	<td>Alamat</td>
	<!-- membuat form untuk mengisikan alamat -->
	<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
	<td>Tgl Lahir</td>
	<td><input type="text" name="tgllhr"></td>
	</tr>
	<tr>
	<td></td>
	<!-- membuat form submit untuk memproses data yang telah dimasukkan -->
	<td><input type="submit" name="Submit" value="Tambah"></td>
	</tr>
	<!-- menutup tabel -->
	</table>
	</form>

	<?php
	//membuat if(isset()) untuk mengecek apakah sebuah variabel telah tersedia (sudah didefenisikan) atau belum.
	if(isset($_POST['Submit'])) {
	//mengambil data nim dalam inputan
	$nim = $_POST['nim']; 
	$nama = $_POST['nama'];
	$jkel = $_POST['jkel'];
	$alamat = $_POST['alamat'];
	$tgllhr = $_POST['tgllhr'];
	//membuat quert untuk menambahkan data baru ke tabel mahasiswa
	//parameter values yang digunakan adalah $nim,$nama,$jkel,$alamat dan $tgllhr
	$result = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama,jkel,alamat,tgllhr) VALUES('$nim','$nama', '$jkel','$alamat','$tgllhr')");

		// menampikna pesan berhasil ketika data berhasil ditambah
		echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
		}
		?>
</body>
</html>
