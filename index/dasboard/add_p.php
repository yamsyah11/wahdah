<?php
include '../../config/koneksi.php';
$nama	       =        $_POST['nama'];
$alamat	       =        $_POST['alamat'];
$no_hp	       =        $_POST['no_hp'];
$jabatan      =        $_POST['jabatan'];
$sql1  = "SELECT gaji FROM jabatan WHERE id_jabatan = $jabatan";
$result = mysqli_query($konek, $sql1);
$row = mysqli_fetch_assoc($result);
$gaji = $row['gaji'];


// echo $name."<br>".$alamat."<br>".$no_telp."<br>".$golongan."<br>".$gaji;
// exit();


$sql = "INSERT INTO dasboard (nama, alamat, no_hp, jabatan, gaji) VALUES ('$nama', '$alamat', '$no_hp', '$jabatan', '$gaji')";
mysqli_query($konek,$sql);
header('location:dasboard.php');
?> 
