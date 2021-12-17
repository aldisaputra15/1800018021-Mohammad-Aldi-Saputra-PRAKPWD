<?php
//include file koneksi.php untuk menghubungkan database
include "koneksi.php";
	//memuat query untuk menampilkan data mahasiswa berdasarkan nim
	$sql="select * from mahasiswa order by nim";
	//menjalankan instruks query lalu disimpan kedalam $tampil
	$tampil = mysqli_query($koneksi,$sql); 
	//membuat kondisi ketiga jumlah $tampil lebih dari 0
	if (mysqli_num_rows($tampil) > 0) {
	//deklarasi dan inisialisasi nilai 1 kedalam $no
	$no=1;
	//membuat array lalu ditampung dalam $response
	$response = array();
	//membuat array lalu ditampung dalam $response["data"]
	$response["data"] = array();
		//membuat perulangan untuk fungsu pengambilan data secara berulang
		while ($r = mysqli_fetch_array($tampil)) {
			//menampilkan data nim lalu simpan kedalam variabel $h['nim']
			$h['nim'] = $r['nim'];
			//menampilkan data nama lalu simpan kedalam variabel $h['nama']
			$h['nama'] = $r['nama'];
			//menampilkan data jkel lalu simpan kedalam variabel $h['jkel']
			$h['jkel'] = $r['jkel'];
			//menampilkan data alamat lalu simpan kedalam variabel $h['alamat']
			$h['alamat'] = $r['alamat'];
			//menampilkan data tgllhr lalu simpan kedalam variabel $h['tgllhr']
			$h['tgllhr'] = $r['tgllhr']; 
			//menyisipkan data dalam variabel $h pada akhir array $response["data"]
			array_push($response["data"], $h);
		}
		//proses mengubah variabel PHP (berisi array) menjadi JSON
		echo json_encode($response);
	}
	else {
		//ketika kondisi IF tidak terpenuhi,maka akan tampil tidak ada data
		$response["message"]="tidak ada data"; 
		//menerjemahkan string JSON agar mudah saat akan diolah
		echo json_encode($response);
	}
?>



