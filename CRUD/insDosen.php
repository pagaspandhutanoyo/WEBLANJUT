<?php
    include "kon.php";
    $npp=$_POST['tnpp'];
    $nama=$_POST['tnama'];
    $prodi=$_POST['tprodi'];

	$sql="insert into dosen (npp,nama,prodi) values ('$npp','$nama','$prodi')";

    $hasil=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location:listDosen.php");
?>