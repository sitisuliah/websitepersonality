<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA PRODUK - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PRODUK</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Produk</td>
				<td><input type="text" name="produk"></td>
			</tr>
			<tr>
				<td>Ukuran</td>
				<td><input type="number" name="ukuran"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>