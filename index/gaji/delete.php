<?php
include '../../config/koneksi.php';
$ID    = $_GET['id'];


$sql = "DELETE FROM gaji WHERE id_gaji = '$ID'";
mysqli_query($konek,$sql);
header('location:../gaji.php');
?>
