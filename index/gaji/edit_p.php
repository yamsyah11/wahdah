<?php
include '../../config/koneksi.php';
$ID            = $_POST['id'];
$nama_guru          = $_POST['nama_guru'];
$jabatan          = $_POST['jabatan'];
$sql1  = "SELECT gaji FROM jabatan WHERE id_jabatan = $jabatan";
$result = mysqli_query($konek, $sql1);
$row = mysqli_fetch_assoc($result);
$gaji = $row['gaji'];



$sql = "UPDATE gaji SET nama_guru='$nama_guru', jabatan='$jabatan', gaji='$gaji' WHERE id_gaji = '$ID'";
mysqli_query($konek,$sql);
header('location:../gaji.php');
?> 