<?php 
include 'koneksi.php';
 
$semester = $_GET['semester'];
 
 
mysqli_query($koneksi,"DELETE FROM ipk WHERE semester='$semester'");
 
header("location:tampilan.php");
 
?>