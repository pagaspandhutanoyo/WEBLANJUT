<?php
    include "kon.php";
    $nim=$_GET['nim'];
    $sql="select * from mhs where nim='$nim'";
    $hasil=mysqgli_query($conn,$sql);
    while ($r=mysqli_fetch_assoc($hasil)) {
        $nama=$r['nama'];
        $alamat=$r['alamat'];
        $kota=$r['kota'];
        $ipk=$r['ipk'];
    }
    mysqli_close($conn);

?>
<html>
<body>
<from action='updMhs.php'method='post'>
<div>NIM</div><div><input type='text' name=tnim></div>
<div>Nama</div><div><input type='text' name=tnama></div>
<div>Alamat</div><div><input type='text' name=talamat></div>
<div>Kota</div><div><input type='text' name=tkota></div>
<div>IPK</div><div><input type='text' name=tipk></div>
<div><input type='submit' value='simpen'></div>
</body>
</html>