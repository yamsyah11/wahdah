<?php
include '../../config/koneksi.php';
$bonus	       =        $_POST['bonus'];

// echo $name."<br>".$alamat."<br>".$no_telp."<br>".$golongan."<br>".$gaji;
// exit();


$sql = "INSERT INTO bonus (bonus) VALUES ('$bonus')";
mysqli_query($konek,$sql);
header('location:../bonus.php');
?> 
