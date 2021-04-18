<?php
    include "kon.php";
    $npp=$_GET['npp'];
	$sql="select * from dosen where npp='$npp'";
    $hasil=mysqli_query($conn,$sql);
    while ($r=mysqli_fetch_assoc($hasil)){
        $nama=$r['nama'];
        $prodi=$r['prodi'];
    }
    mysqli_close($conn);
?>
<html>
<head>
    <title>Form Edit Data</title>
</head>
<body>
    <form action="updDosen.php" method="post">
        <div>NPP</div>
        <div><input type="text" name="tnpp" value="<?php echo $npp; ?>"/></div>
        <div>Nama</div>
        <div><input type="text" name="tnama" value="<?php echo $nama; ?>"/></div>
        <div>Prodi</div>
        <div><input type="text" name="tprodi" value="<?php echo $prodi; ?>"/></div>
        <div><input type="submit" value="Simpan"/></div>
    </form>
</body>
</html>