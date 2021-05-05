<?php 
include 'koneksi.php';
 
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
 
mysqli_query($koneksi,"UPDATE ipk SET ipk='$ipk' WHERE semester='$semester'"); 
 
header("location:tampilan.php");
 
?>