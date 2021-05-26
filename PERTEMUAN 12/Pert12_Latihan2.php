<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error($con));
 }
mysqli_select_db($con, "lat_dbase");
$test = mysqli_query($con, "DELETE FROM tbl_mhs WHERE LastName='Prabowo'");
if ($test) 
{
	echo "Hapus Data Berhasil";
}
?> 