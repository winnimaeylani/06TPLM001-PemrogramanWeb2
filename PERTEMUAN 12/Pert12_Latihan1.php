<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
 {
 die('Could not connect: ' . mysqli_error($con));
 }
mysqli_select_db($con, "lat_dbase");
$test = mysqli_query($con, "UPDATE tbl_mhs SET Age = '36'
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
if ($test) 
{
	echo "Edit Data Berhasil";
}
mysqli_close($con);
?> 