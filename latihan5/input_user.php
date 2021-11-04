<?php
	include "koneksi.php";

	$id_user	= $_POST['id_user'];
	$nama		= $_POST['nama'];
	$email		= $_POST['email'];
	$password= md5($_POST['password']);
	
	$sql   = "INSERT INTO users(id_user,password, nama, email) VALUES ('$id_user', '$password', '$nama','$email')";
	$query = mysqli_query($koneksi, $sql); mysqli_close($koneksi);
	
	header('location:tampil_user.php');
?>
