<?php

//Variabel database
    $servername = "sql210.epizy.com";
    $username = "epiz_27529409";
    $password = "t4CE64Upp3kgWA4";
    $dbname = "epiz_27529409_angkot54";

	$koneksi = mysqli_connect($servername, $username, $password, $dbname); // menggunakan mysqli_connect

	if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>
<?php
 
//Variabel database
    $servername = "sql210.epizy.com";
    $username = "epiz_27529409";
    $password = "t4CE64Upp3kgWA4";
    $dbname = "epiz_27529409_angkot54";
 
	$koneksi = mysqli_connect($servername, $username, $password, $dbname); // menggunakan mysqli_connect
 
	if(mysqli_connect_errno()){ // mengecek apakah koneksi database error
		echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error(); // pesan ketika koneksi database error
	}
?>