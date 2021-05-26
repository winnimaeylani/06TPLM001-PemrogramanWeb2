<head>
<title>Buku Tamu</title>
</head>
<center>
<body>
<table border=1>
<?php
if (isset($_POST['simpan'])) 
{
	$nama=$_POST['nama'];
	$telepon=$_POST['telepon'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$pesan = $_POST['pesan'];

	if (($nama!="") && ($telepon!="") && ($email!="") && ($alamat!="") && ($pesan!=""))
	{
	 $koneksi=mysqli_connect("localhost","root","");
	 if (!$koneksi)
	 {
	 die('Could not connect: ' . mysqli_error($koneksi));
	 }
	 mysqli_select_db($koneksi, "bukutamu");
	 $sql ="INSERT INTO tb_tamu (nama, telepon, email, alamat, pesan)
			VALUES
			('$nama','$telepon','$email','$alamat','$pesan')";
	 $hasil = mysqli_query ($koneksi, $sql);
	}
	echo '<script language="javascript">alert("Terima Kasih, Data Anda berhasil Disimpan !"); document.location="index.php";</script>';
}
	
?> 

