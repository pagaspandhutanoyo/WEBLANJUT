<?php
    include "kon.php";
    $sql="select * from mhs";
    $hasil=mysqli_query($conn,$sql);
    echo "<a href='addMhs.php'>Tambah Data</a>";
    echo "<table><tr><th>NIM</th><th>Nama</th><tb>Alamat</th>
            <th>Kota</th><th>IPK</th><th>Delete</th><th>Edit</th></tr>";

    while ($r=mysqli_fetch_assoc($hasil)) {
        echo "<tr><td>".$r['nim']."</td><td>".$r['nama']."</td><td>".$r['alamat']."</td><td>".$r['kota']."</td><td>".$r['ipk']."</td>
        <td><a href="delMhs.php?nim=".$r['nim']."'>delete</a></tr>";
        <td><a href="EditMhs.php?nim=".$r['nim']."'>Edit</a></tr>";

    }
    echo "</table>";
    mysqli_close($conn);
?>