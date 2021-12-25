<?php
//menyertakan sebuah file koneksi.php kedalam file PHP lainnya 
//dan memastikan file yang disertakan tersebut hanya dieksekusi sekali saja
//koneksi.php berisikan data koneksi database
require_once "koneksi.php";
	//membuat query untuk menampilkan keseluruhan data mahasiswa
	$sql   = "select * from mahasiswa";
	//menjalankan instruksi query lalu disimpan kedalam $query
	$query = mysqli_query($koneksi,$sql);
	//membuay perulangan untuk mengembalikan nilai berupa associative array
	//dan secara otomatis menaikkan posisi pointer dari variabel $query pada tiap pemanggilan.
	while ($row = mysqli_fetch_assoc($query)) {
		//meletakkan nilai $row kedalam array $data[]
		$data[] = $row;
	}
	//mengirimkan http json ke browser untuk memberi tahu dia seperti apa data yang di harapkan.
	header('content-type: application/json'); 
	//proses merubah variabel PHP (berisi array) menjadi JSON
	echo json_encode($data);
//menutup koneksi database yang dibuka sebelumnya.	
mysqli_close($koneksi);
?>
