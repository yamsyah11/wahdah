<?php
include '../../config/koneksi.php';
$ID            = $_POST['id'];
$nama          = $_POST['nama'];
$alamat         = $_POST['alamat'];
$no_hp          = $_POST['no_hp'];
$jabatan          = $_POST['jabatan'];


$sql = "UPDATE guru SET nama='$nama', alamat='$alamat', no_hp='$no_hp', jabatan='$jabatan' WHERE id_guru = '$ID'";
mysqli_query($konek,$sql);
header('location:../guru.php');
?> 