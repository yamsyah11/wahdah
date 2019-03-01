<?php
include 'config/koneksi.php';
$name	       =        $_POST['name'];
$email	       =        $_POST['email'];
$password	   =        $_POST['password'];

$sql = "INSERT INTO user (name,email,password) VALUES ('$name,$email,$password')";
mysqli_query($konek,$sql);
header('location:index.php');
?> 
