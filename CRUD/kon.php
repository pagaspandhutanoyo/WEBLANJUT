<?php
	$host="localhost";
	$user="root";
	$pass="";
	$dbname="db_web";
	$conn=mysqli_connect($host,$user,$pass);
    if (!$conn)
		echo "Koneksi gagal";
	$db=mysqli_select_db($conn,$dbname);
    if (!$db)
        echo "Database gagal dibuka";
?>