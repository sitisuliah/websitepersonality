<html>
<head>
<title>Menu dengan Hyperlink</title>
<style type="text/css"> body
{
/*background-image:url('me2.gif');
background-repeat: repeat-y;*/
background:#48b5e0 url('me2.gif')repeat-y left;
background-attachment:ficed ; 
}
</style>
</head>
<body>
<font color="navy" size="4"> Menu</font>
<font color="Sienna" size="4">
<ul type="square">
<li><a href="Home.php" target="kanan">Home</a></li>
<li><a href="Profil.php" target="kanan">Profile</a></li>
<li><a href="produk/index.php" target="kanan">Produk</a></li>
<li><a href="logout.php" target="main" onclick="return confirm('Yakin logout?')">Logout</a></li>
</ul></font>
</body>
</html>