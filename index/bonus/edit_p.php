<?php
include '../../config/koneksi.php';
$ID            = $_POST['id'];
$bonus			= $_POST['bonus'];


$sql = "UPDATE bonus SET bonus='$bonus' WHERE id_bonus = '$ID'";
mysqli_query($konek,$sql);
header('location:../bonus.php');
?> 