<?php 
include 'koneksi.php';
 
$semester = $_POST['semester'];
$ipk = $_POST['ipk'];
 
$tambahdata = mysqli_query($koneksi,"INSERT INTO  ipk VALUES ('$semester','$ipk')");
if(!$tambahdata){
	echo "<script>
    alert ('Gagal Menambahkan Data');
	</script>";
}else {
	echo "<script>
alert ('Data berhasil ditambah');
	</script>";
}
 
header("location:tampilan.php");
 
?>