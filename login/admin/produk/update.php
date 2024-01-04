<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$produk = $_POST['produk'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($koneksi,"update tb_produk set produk='$produk', ukuran='$ukuran', harga='$harga' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>