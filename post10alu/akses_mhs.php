<?php
//meletakkan link url lokasi getdatamhs.php kedalam $url
$url = "http://localhost/kegiatan10alu/getdatamhs.php";
//mengambil data dari $url lalu dimasukken kedalam variabel $client
$client = curl_init($url);
//mengembalikan transfer menjadi bentuk String.
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
//menampilkan data dalam $client untuk eksekusi resource script
//lalu disimpan kedalam variabel $response
$response = curl_exec($client);
//menerjemahkan string JSON lalu disimpan dalam $result
$result = json_decode($response); 
	//membuat perulangan yang datanya dalam bentuk array.
	//data $result lalu diisinialisasi menjadi $r
	foreach ($result as $r) {
	echo "<p>";
	echo "NIM : " . $r->nim . "<br />";	//menampilkan data nim
	echo "Nama : " . $r->nama . "<br />";  //menampilkan data nama
	echo "jenis kel : " . $r->jkel . "<br />"; //menampilkan data jkel
	echo "Alamat : " . $r->alamat . "<br />"; //menampilkan data alamat
	echo "Tgl Lahir : " . $r->tgllhr . "<br />"; //menampilkan data tgllhr
	echo "</p>";
}
