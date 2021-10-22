<?php
	//mendeklarasikan localhost kedalam variabel $host
	$host="localhost";
	//mendeklarasikan username root kedalam variabel $username
	$username="root";
	//mendeklarasikan password database kedalam variabel $password
	$password="";
	//mendeklarasikan nama database "akademik" kedalam variabel $databasename
	$databasename="akademik";
	//menghubungkan koneksi antara PHP dan MySQL dengan fungsi mysqli_connect()
	//dengan parameter yang digunakan adalah host,username,password dan namadatabase
	$koneksi=@mysqli_connect($host,$username,$password,$databasename);
	//membuat kondisi ketika koneksi tidak terbaca
	if (!$koneksi) {
	//jika kondisi diatas terpenuhi, maka akan ditampilkan sebuah pesan error 
	echo "Error: " . mysqli_connect_error(); exit();
	}
?>
