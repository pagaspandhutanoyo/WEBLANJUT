<?php
    include "kon.php";
    $npp=$_POST['tnpp'];
    $nama=$_POST['tnama'];
    $prodi=$_POST['tprodi'];
    
	$sql="update dosen set nama='$nama',prodi='$prodi' where npp='$npp'";
    
    $hasil=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:listDosen.php");
?>