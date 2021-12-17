<?php
//include file koneksi.php untuk menghubungkan database
include "koneksi.php"; 
//memuat header unruk text/xml
header('Content-Type: text/xml');
	//memuat query untuk tampil seluruh data mahasiswa
	$query = "SELECT * FROM mahasiswa";
	//menjalankan instruks query lalu disimpan kedalam $hasil
	$hasil = mysqli_query($koneksi,$query);
	//mengembalikan fungsi jumlah bidang (columns) dalam satu set hasil
	$jumField = mysqli_num_fields($hasil);
	//mendeklarasikan xml dengan versi 1.0
	echo "<?xml version='1.0'?>"; 
	echo "<data>";
	//membuat perulangan untuk fungsu pengambilan data secara berulang
	while ($data = mysqli_fetch_array($hasil)){
		//memberikan nilai atribut yang digunakan yaitu mahasiswa
		echo "<mahasiswa>"; 
		//elemen yang digunakan adalah nim,nama,jkel,alamat dan tgllhr
		//ambil data nim dalam database lalu tampilkan
		echo"<nim>",$data['nim'],"</nim>"; 
		//ambil data nama dalam database lalu tampilkan
		echo"<nama>",$data['nama'],"</nama>"; 
		//ambil data jkel dalam database lalu tampilkan
		echo"<jkel>",$data['jkel'],"</jkel>"; 
		//ambil data alamat dalam database lalu tampilkan
		echo"<alamat>",$data['alamat'],"</alamat>"; 
		//ambil data tgllhr dalam database lalu tampilkan
		echo"<tgllhr>",$data['tgllhr'],"</tgllhr>"; 
		echo "</mahasiswa>";
	}
	echo "</data>";
?>
