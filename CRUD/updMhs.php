<!-- //crud -->
<?php
    include "kon.php";
    $nim=$_POST['tnim'];
    $nama=$_POST['tnama'];
    $alamat=$_POST['tkota'];
    $ipk=$_POST['tipk'];

    $sql="update mhs set
         nama='$nama',alamat=$alamat',kota='$kota',ipk='$ipk'
                where nim='$nim';

    $hasil=mysqli_query($conn,$sql);
    mysqli_close($conn);
    header("location: listMhs.php");
?>