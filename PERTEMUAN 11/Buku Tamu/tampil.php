<head>
<title>Buku Tamu</title>
	<link rel="stylesheet" href="style.css">
</head>
<center>
<body>
	<br><br>
 <h1>DAFTAR 5 TAMU TERAKHIR</h1>
 <h1>Universitas Pamulang</h1>
 <hr>
 <table border=1>
 	<?php
		$koneksi = mysqli_connect("localhost","root","");
		mysqli_select_db($koneksi, "bukutamu");
		$sql="select * from tb_tamu ORDER BY id DESC LIMIT 5";
		$hasil=mysqli_query ($koneksi, $sql);
		$row=mysqli_fetch_row($hasil);
		echo "<tr> <td>No
		 <td>Nama Lengkap
		 <td>No Telepon
		 <td>Email
		 <td>Alamat
		 <td>Pesan";
		if ($row)
		{
		 $n=1;
		 do
		{
		 list ($id, $nama, $telepon, $email, $alamat, $pesan)=$row;
		 echo "<tr>
		 <td>$n
		 <td>$nama
		 <td>$telepon
		 <td>$email
		 <td>$alamat
		 <td>$pesan";
		 $n=$n+1;
		 }
		 while ($row=mysqli_fetch_row($hasil));
		}
		else
		{
		echo "<tr><td colspan=7> <center>Tidak ada data";
		}

	?>
</table>
<p><a href="tampil2.php"><h3>Lihat Semua Data</h3></a></p>
<p><a href="index.php"><h3>Kembali ke halaman utama</h3></a></p>
</body>