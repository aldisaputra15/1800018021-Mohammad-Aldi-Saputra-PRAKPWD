<html>
<head>
	<style>
		.error {color: #FF0000;}
	</style>
</head>

<body>
<?php
	// mendefinisikan variabel dan mengatur nilai awalnya sama dengan kosong
	$namaErr = $nimErr = $genderErr = $agamaErr = $prodiErr = "";
	$nama = $nim = $gender = $agama = $prodi = "";
	//kondisi jika request dari inputan form menggunakan metode POST
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//melakukan proses validasi
	if (empty($_POST["nama"])) {
		//ketika kondisi $_POST["nama"] kosong maka akan tampil validasi "Nama harus diisi"
		$namaErr = "Nama harus diisi";
	}else {
		//selain itu, data nama akan disimpan di $nama
		$nama = test_input($_POST["nama"]);
	}
	if (empty($_POST["nim"])) {
		//ketika kondisi $_POST["nim"] kosong maka akan tampil validasi "Nim harus diisi"
		$nimErr = "NIM harus diisi";
	}else {
		//selain itu, data nim akan disimpan di $nama
		$nim = test_input($_POST["nim"]);

	}
	if (empty($_POST["prodi"])) {
		//ketika kondisi $_POST["prodi"] kosong maka akan tampil validasi "Prodi harus diisi"
		$prodiErr = "Prodi harus diisi";
	}else {
		//selain itu, data prodi akan disimpan di $nama
		$prodi = test_input($_POST["prodi"]);
	}

	if (empty($_POST["agama"])) {
		//ketika kondisi $_POST["agama"] kosong maka akan tampil validasi ""
		$agama = "";
	}else {
		//selain itu, data agama akan disimpan di $nama
		$agama = test_input($_POST["agama"]);
	}

	if (empty($_POST["gender"])) {
		//ketika kondisi $_POST["nama"] kosong maka akan tampil validasi "Gender harus diisi"
		$genderErr = "Gender harus dipilih";
	}else {
		//selain itu, data gender akan disimpan di $nama
		$gender = test_input($_POST["gender"]);
	}
	}
	//membuat fungsi untuk test_input
	function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data); return $data;
	}
?>
<h2>Formulis Data Mahasiswa INFORMATIKA UAD</h2>

<p><span class = "error">* Harus Diisi.</span></p>
	<form method = "post" action = "<?php
	echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<table>
	<tr>
		<td>Nama:</td>
		<!-- membuat form nama -->
		<td><input type = "text" name = "nama">
		<span class = "error">* <?php echo $namaErr;?></span></td>
	</tr>

	<tr>
		<td>NIM: </td>
		<!-- membuat input untuk mengisikan email -->
		<td><input type = "text" name = "nim">
		<span class = "error">* <?php echo $nimErr;?></span>
		</td>
	</tr>

	<tr>
		<td>Prodi:</td>
		<!-- membuat input untuk mengisikan website -->
		<td> <input type = "text" name = "prodi">
		<span class = "error">* <?php echo $prodiErr;?></span>
		</td>
	</tr>

	<tr>
		<td>Agama:</td>
		<!-- membuat input untuk mengisikan komentar -->
		<td> <input type = "text" name = "agama">
		<span class = "error"> <?php echo $agamaErr;?></span>
	</tr>

	<tr>
		<td>Jenis Kelamin:</td>
		<td>
			<!-- membuat input untuk mengisikan jenis kelamin (gender) -->
		<input type = "radio" name = "gender" value = "L">Laki-Laki
		<input type = "radio" name = "gender" value = "P">Perempuan
		<span class = "error">* <?php echo $genderErr;?></span>
		</td>
	</tr>

	<td>
		<!-- membuat input untuk submit data -->
		<input type = "submit" name = "submit" value = "Submit">
	</td>
	</table>
	</form>

<?php
	//menampilkan hasil data
	echo "<h2>Data yang anda isi:</h2>";
	echo $nama; echo "<br>";
	echo $nim; echo "<br>";
	echo $prodi; echo "<br>";
	echo $agama; echo "<br>";
	echo $gender;
?>
</body>
</html>
