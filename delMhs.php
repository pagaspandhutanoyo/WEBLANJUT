<?php
    include "kon.php";
    $nim=$_GET['nim'];

    $sql="DELETE from mhs where nim="$nim";

    $hasil=mysqli_query($conn,$sql);
    header("location: listMhs.php");
?>