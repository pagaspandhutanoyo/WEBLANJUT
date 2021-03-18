<html>
<head>
<body>
<?php
	if (isset($_POST['Simpan'])){
		$nim=$_POST['nim'];
		$prodi=$_POST['Prodi'];
		$nTugas=$_POST['nilaiTugas'];
		$nUTS=$_POST['nilaiUTS'];
		$nUAS=$_POST['nilaiUAS'];
		$nA=($nTugas*0.4)+($nUTS*0.3)+($nUAS*0.3);
		if ($nA>70){
			$ket="LULUS";
		}
		else {
			$ket="TIDAK LULUS";
		}
	}
?>

<table border="1" cellpadding="0">
	<tr>
		<td>Program Studi</td>
		<td>NIM</td>
		<td>Nilai Akhir</td>
		<td>Status</td>
		<td>Catatan Khusus</td>
	<tr>
	<tr>
		<td><?php echo "$prodi";?></td>
		<td><?php echo "$nim";?></td>
		<td><?php echo "$nA"; ?></td>
		<td><?php echo "$ket"; ?></td>
		<td><?php
		if (isset($_POST['note1'])){
			echo "-".$_POST['note1']."<br>";
		}
		if (isset($_POST['note2'])){
			echo "-".$_POST['note2']."<br>";
		}
		if (isset($_POST['note3'])){
			echo "-".$_POST['note3']."<br>";
		}
	?></td>
	</tr>
</table>
</body>
</head>
</html>