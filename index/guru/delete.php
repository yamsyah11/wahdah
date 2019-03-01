<?php
include '../../config/koneksi.php';
$ID    = $_GET['id'];


$sql = "DELETE FROM guru WHERE id_guru = '$ID'";
mysqli_query($konek,$sql);
header('location:../guru.php');
?>
