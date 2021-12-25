<?php
//membuat form untuk pencarian data
echo "<form action='akses_cari_mhs.php' method='get'>
		<label>Cari :</label>
		<input type='text' name='input'>
		<input type='submit' value='Cari'>
	</form>";

error_reporting(0);
$input = $_GET['input'];
$url = "http://localhost/post10alu/getcari_mhs.php?input=".$input;
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response); 
	//menampilkan data mahasiswa
	foreach ($result as $r) {
	echo "<p>";
	echo "NIM : " . $r->nim . "<br />";	
	echo "Nama : " . $r->nama . "<br />";  
	echo "jenis kel : " . $r->jkel . "<br />"; 
	echo "Alamat : " . $r->alamat . "<br />"; 
	echo "Tgl Lahir : " . $r->tgllhr . "<br />"; 
	echo "</p>";
}
