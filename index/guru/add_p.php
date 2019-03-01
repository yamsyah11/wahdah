<?php
include '../../config/koneksi.php';
$nama	       =        $_POST['nama'];
$alamat	       =        $_POST['alamat'];
$no_hp	       =        $_POST['no_hp'];
$jabatan      =        $_POST['jabatan'];


// echo $name."<br>".$alamat."<br>".$no_telp."<br>".$golongan."<br>".$gaji;
// exit();


$sql = "INSERT INTO guru (nama, alamat, no_hp, jabatan) VALUES ('$nama', '$alamat', '$no_hp', '$jabatan')";
mysqli_query($konek,$sql);
header('location:../guru.php');
?> 
