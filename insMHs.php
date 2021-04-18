<?php
    include "kon.php";
    $nim=$_POST['tnim'];
    $nama=$_POST['tnama'];
    $alamat=$_POST['tkota'];
    $ipk=$_POST['tipk'];

    $sql="INSERT INTO mhs (nim,nama,alamat,kota,ipka) values
    ('$nim','$nama','$alamat','$kota','$ipk')";

    $hasil=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: listMhs.php");
?>