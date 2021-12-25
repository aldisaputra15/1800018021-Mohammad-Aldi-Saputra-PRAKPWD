<?php
//include koneksi.php yang berisikan data koneksi database
require_once "koneksi.php";
//ketika isian pencarian ada maka diproses
if(isset($_GET['input'])){
	$input = $_GET['input'];
	//tampil mahasiswa berdasarkan nim dari pencarian
	$sql="select * from mahasiswa where nim like'%".$input."%'";
	$query = mysqli_query($koneksi,$sql);
//jika isian pencarian kosong
}else{
	//tampil seluruh data mahasiswa
	$sql="select * from mahasiswa";
	$query = mysqli_query($koneksi,$sql);
}
	while ($row = mysqli_fetch_assoc($query)) {
		$data[] = $row;
	}
	header('content-type: application/json'); 
	echo json_encode($data);
mysqli_close($koneksi);
?>

