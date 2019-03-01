<?php
include '../../config/koneksi.php';
$ID    = $_GET['id'];


$sql = "DELETE FROM bonus WHERE id_bonus = '$ID'";
mysqli_query($konek,$sql);
header('location:../bonus.php');
?>
