<?php
include '../../config/koneksi.php';
$ID            = $_POST['id'];
$jabatan          = $_POST['jabatan'];
$gaji          = $_POST['gaji'];

$sql = "UPDATE jabatan SET jabatan='$jabatan', gaji=$gaji WHERE id_jabatan = '$ID'";
mysqli_query($konek,$sql);
header('location:../index.php');
?> 