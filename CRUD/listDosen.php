<?php
	include "kon.php";
    $sql="select * from dosen";
    $hasil=mysqli_query($conn,$sql);
    echo "<a href='addDosen.php'>Tambah Data</a>";
    echo "<table cellpadding='3'><tr><th width='20'>NPP</th>
    <th width='200'>Nama</th><th width='50'>Prodi</th><th>Delete</th><th>Edit</th></tr>";
    while ($r=mysqli_fetch_assoc($hasil))
    {
        echo "<tr><td>".$r['npp']."</td><td>".$r['nama']."</td><td>".$r['prodi']."</td>
        <td><a href='delDosen.php?npp=".$r['npp']."'>Delete</a></td>
        <td><a href='editDosen.php?npp=".$r['npp']."'>Edit</a></td></tr>";
    }
    echo "</table>";
    mysqli_close($conn);
?>