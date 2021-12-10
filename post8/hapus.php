<?php
	// memasukkan koneksi.php agar bisa terhubung dengan database
	include "koneksi.php";

	// Dapatkan id dari URL untuk menghapus data mahasiswa dengan nim yang dipilih
	$nim = $_GET['nim'];

	// membuat query menghapus data berdasarkan nim yang dipilih
	$result = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim='$nim'");

	// Setelah menghapus redirect ke Home, maka daftar pengguna terbaru akan ditampilkan. 
	header("Location:index.php");
?>
