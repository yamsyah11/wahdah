<?php
include '../../config/koneksi.php';
$jabatan      =        $_POST['jabatan'];
$gaji	       =        $_POST['gaji'];

// echo $name."<br>".$alamat."<br>".$no_telp."<br>".$golongan."<br>".$gaji;
// exit();


$sql = "INSERT INTO jabatan (jabatan, gaji) VALUES ('$jabatan', '$gaji')";
mysqli_query($konek,$sql);
header('location:../index.php');
?> 
