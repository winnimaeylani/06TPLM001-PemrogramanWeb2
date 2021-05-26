<?php
 $koneksi = mysqli_connect("localhost","root","");
 mysqli_select_db($koneksi, "lat_dbase");
 // mysql_select_db("lat_dbase");
 $hasil= mysqli_query($koneksi, "select * from tbl_mhs");
 While($data=mysqli_fetch_row($hasil))
 {
 echo "$data[0] $data[1] $data[2]<br>";
 }
?>