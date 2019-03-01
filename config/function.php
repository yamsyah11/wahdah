<?php
	
	include 'koneksi.php';
	
	function jabatan($id){
		global $konek;
            $sql   = "SELECT * FROM jabatan WHERE id_jabatan = $id";
            $result = mysqli_query($konek, $sql);
           	$row = mysqli_fetch_assoc($result);
           	return $row ['jabatan'];
	}

		function gaji($id){
		global $konek;
            $sql   = "SELECT * FROM jabatan WHERE id_jabatan = $id";
            $result = mysqli_query($konek, $sql);
           	$row = mysqli_fetch_assoc($result);
           	return $row ['gaji'];
	}

		function nama($id){
		global $konek;
            $sql   = "SELECT * FROM guru WHERE id_guru = $id";
            $result = mysqli_query($konek, $sql);
           	$row = mysqli_fetch_assoc($result);
           	return $row ['nama'];
	}

			function alamat($id){
		global $konek;
            $sql   = "SELECT * FROM guru WHERE id_guru = $id";
            $result = mysqli_query($konek, $sql);
           	$row = mysqli_fetch_assoc($result);
           	return $row ['alamat'];
	}

				function no_hp($id){
		global $konek;
            $sql   = "SELECT * FROM guru WHERE id_guru = $id";
            $result = mysqli_query($konek, $sql);
           	$row = mysqli_fetch_assoc($result);
           	return $row ['no_hp'];
	}

?>