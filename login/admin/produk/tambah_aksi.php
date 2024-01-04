<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$produk = $_POST['produk'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into tb_produk values('','$produk','$ukuran','$harga')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>