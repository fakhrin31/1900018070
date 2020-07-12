<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<table border='1'>
		<tr>
			<th><pre>Nama </pre></th>
			<th><pre>Nomor Telepon </pre></th>
			<th><pre>E-mail </pre></th>
			<th><pre>Jenis Kelamin </pre></th>
			<th><pre>Tanggal Berangkat </pre></th>
			<th><pre>Asal </pre></th>
			<th><pre>Tujuan </pre></th>
			<th><pre>Kelas </pre></th>
			<th><pre>Jumlah Tiket </pre></th>
			<th><pre>Jam Keberangkatan </pre></th>
			<th><pre>Harga Tiket</pre></th>
		</tr>
		<?php 
		$fp = fopen("file.txt", "r");
		echo "<a href=form.html> Klik Disini </a> Isi Form Tiket Bus Antar Provinsi";
		while ($isi = fgets($fp,1000)) {
			$out = explode("|", $isi);
			echo "
			<tr>
				<td>$out[0]</td>
				<td>$out[1]</td>
				<td>$out[2]</td>
				<td>$out[3]</td>
				<td>$out[4]</td>
				<td>$out[5]</td>
				<td>$out[6]</td>
				<td>$out[7]</td>
				<td>$out[8]</td>
				<td>$out[9]</td>
				<td>$out[10]</td>
			 </tr>";
			}
		 ?>
		</table>
	</div>

</body>
</html>