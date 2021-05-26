<html>
</head>
	<title>Buku Tamu</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div id="container">
		<h1>Form Buku Tamu</h1>
		<h1>Universitas Pamulang</h1>
		<hr>
 			<form action="simpan.php" method="post">
				<p><b>Nama Lengkap :</b><br><input type="text" name="nama" placeholder="Nama Lengkap" required /></p>
				<p><b>No Telepon :</b><br><input type="text" name="telepon" placeholder="No Telepon" required /></p>
				<p><b>Email :</b><br><input type="text" name="email" placeholder="Email" required /></p>
				<p><b>Alamat :</b><br><input type="text" name="alamat" placeholder="Masukan Alamat" required /></p>
				<p><b>Pesan :</b><br><textarea name="pesan" rows="5" cols="50" placeholder="Silahkan isi pesan" required></textarea></p>
	    
				<p><input type="submit" name="simpan" value="Kirim" /> </p>
				<p><a href="tampil.php"><h3>Lihat Data</h3></a></p>
				
			</form>
        		