<?php
include '../../config/koneksi.php';
$id = $_POST ['id'];
$nama_guru	       =        $_POST['nama_guru'];
$jabatan      =        $_POST['jabatan'];
$sql1  = "SELECT gaji FROM jabatan WHERE id_jabatan = $jabatan";
$result = mysqli_query($konek, $sql1);
$row = mysqli_fetch_assoc($result);
$gaji = $row['gaji'];

$sql = "INSERT INTO gaji (nama_guru, jabatan, gaji) VALUES ('$nama_guru', '$jabatan', '$gaji')";
mysqli_query($konek,$sql);
header('location:../gaji.php');
?> 
