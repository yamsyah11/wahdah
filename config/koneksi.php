<?php 
	$server = 'localhost';
	$user = 'phpmyadmin';
	$pass = '123';
	$db = 'smk';

	$konek = mysqli_connect($server, $user, $pass, $db);
	if (!$konek) {
			die('koneksi error '. mysqli_connect_error());
	}
?>