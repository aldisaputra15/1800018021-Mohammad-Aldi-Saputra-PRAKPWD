<?php
// memasukkan koneksi.php agar bisa terhubung dengan database
include "koneksi.php";

// Periksa apakah form dikirimkan untuk pembaruan pengguna, lalu arahkan kembali ke beranda setelah pembaruan
if(isset($_POST['update'])){
	//mengambil data nim dalam inputan lalu dimasukkan kedalam $nim 
	$nim = $_POST['nim'];
	//mengambil data nama dalam inputan lalu dimasukkan kedalam $nama 
	$nama=$_POST['nama'];
	//mengambil data jkel dalam inputan lalu dimasukkan kedalam $jkel 
	$jkel=$_POST['jkel'];
	//mengambil data alamat dalam inputan lalu dimasukkan kedalam $alamat
	$alamat=$_POST['alamat'];
	//mengambil data tgllhr dalam inputan lalu dimasukkan kedalam $tgllhr
	$tgllhr=$_POST['tgllhr'];

	// membuat query untuk update data mahasiswa
	$result = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', jkel='$jkel', alamat='$alamat', tgllhr='$tgllhr' WHERE nim='$nim'");

	// Redirect tke halaman index.php
	header("Location: index.php");
	}
	?>

	<?php
	// Menampilkan data pengguna yang dipilih berdasarkan id
	// Mendapatkan id dari url
	$nim = $_GET['nim'];

	// Ambil data pengguna (nim) dengan query berdasarkan nim mahasiswa yang dipilih
	$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");
	//membuat perulangan dengan paramaternya mysqli_fetch_array()
	//mysqli_fetch_array() berfungsi untuk mengambil data MysQL pada query $result sebelumnya
	while($user_data = mysqli_fetch_array($result))
	{
	//menampilkan data nim mahasiswa dalam database
	$nim = $user_data['nim'];
	//menampilkan data nama mahasiswa dalam database
	$nama2 = $user_data['nama'];
	//menampilkan data jkel mahasiswa dalam database
	$jkel = $user_data['jkel'];
	//menampilkan data alamat mahasiswa dalam database
	$alamat = $user_data['alamat'];
	//menampilkan data tgllhr mahasiswa dalam database
	$tgllhr = $user_data['tgllhr'];
}
?>
<html>
<head>
<title>Edit Data Mahasiswa</title>
</head>

<body>
	<!-- membuat link href untuk pindah kehalaman index.php (halaman utama) -->
	<a href="index.php">Home</a>
	<br/><br/>
	<!-- membuat form menggunakan metode POST dengan action akan dialihkan ke edit.php -->
	<form name="update_mahasiswa" method="post" action="edit.php">
	<table border="0">
	<tr>
	<td>Nama</td>
	<!-- menampilkan data nama di input edit nama -->
	<td><input type="text" name="nama" value="<?php echo $nama2; ?>"></td>
	</tr>
	<tr>
	<td>Gender</td>
	<!-- menampilkan data jkel di input edit jenis kelamin -->
	<td><input type="text" name="jkel" value="<?php echo $jkel; ?>"></td>
	</tr>
	<tr>
	<td>alamat</td>
	<!-- menampilkan data alamat di input edit alamat -->
	<td><input type="text" name="alamat" value="<?php echo $alamat; ?>"></td>
	</tr>
	<tr>
	<td>Tgl Lahir</td>
	<!-- menampilkan data tgllhr di input edit tanggal lahir -->
	<td><input type="text" name="tgllhr" value="<?php echo $tgllhr; ?>"></td>
	</tr>
	<tr>
	<!-- membuat form hidden untuk menyimpan nilai $nim -->
	<td><input type="hidden" name="nim" value="<?php echo $nim; ?>"></td>
	<!-- membuat form submit untuk memproses data yang telah dimasukkan -->
	<td><input type="submit" name="update" value="Update"></td>
	</tr>
	</table>
	</form>
</body>
</html>
