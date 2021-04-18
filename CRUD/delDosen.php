<?php
    include "kon.php";
    $npp=$_GET['npp'];
    $sql="delete from dosen where npp='$npp'";
    $hasil=mysqli_query($conn,$sql);
    header("location:listDosen.php");
?>