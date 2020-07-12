<link rel="stylesheet" type="text/css" href="style.css">
<div class="content">
<center>
<?php 

$error = false;

if(@$_POST['nama']==''){
	echo "validasi nama tidak boleh kosong<br/>";
	$error = true;
}
if(strlen(@$_POST['telpon']) < 10){
	echo "validsi nomor telpon harus lebih dari 9 digit<br/>";
	$error = true;
}
if(@$_POST['email']==''){
	echo "validasi email tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['kelamin']==''){
	echo "validasi jenis kelamin tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['tanggal']==''){
	echo "validasi tanggal berangkat tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['asal']==''){
	echo "validasi asal tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['tujuan']==''){
	echo "validasi tujuan tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['kelas']==''){
	echo "validasi kelas tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['jumlah']==''){
	echo "validasi tiket tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['jam']==''){
	echo "validasi jam keberangkatan tidak boleh kosong<br/>";
	$error = true;
}
if(!$error){
	echo "<br><h2>Terimakasih data sudah valid</h2>";
}
if (isset($_POST['nama']) && $_POST['nama']!='') {
		$nama = $_POST['nama'];
	}
	if (isset($_POST['telpon']) && $_POST['telpon']!='') {
		$telpon = $_POST['telpon'];
	}
	if (isset($_POST['email']) && $_POST['email']!='') {
		$email = $_POST['email'];
	}
	if (isset($_POST['kelamin']) && $_POST['kelamin']!='') {
		$kelamin = $_POST['kelamin'];
	}
	if (isset($_POST['tanggal']) && $_POST['tanggal']!='') {
		$tanggal = $_POST['tanggal'];
	}
	if (isset($_POST['asal']) && $_POST['asal']!='') {
		$asal = $_POST['asal'];
	}
	if (isset($_POST['tujuan']) && $_POST['tujuan']!='') {
		$tujuan = $_POST['tujuan'];
	}
	if (isset($_POST['kelas']) && $_POST['kelas']!='') {
		$kelas = $_POST['kelas'];
	}
	if (isset($_POST['jumlah']) && $_POST['jumlah']!='') {
		$jumlah = $_POST['jumlah'];
	}
	if (isset($_POST['jam']) && $_POST['jam']!='') {
		$jam = $_POST['jam'];
	}
	if (isset($_POST['harga']) && $_POST['harga']!='') {
		$harga = $_POST['harga'];
	}
	$fp = fopen("file.txt","a+");
	fputs($fp,"$nama|$telpon|$email|$kelamin|$tanggal|$asal|$tujuan|$kelas|$jumlah|$jam|$harga\n");
	fclose($fp);

echo "<h2><a href=form.html> Booking Tiket lagi </a></h2><br>";
echo "<h2><a href=tabel.php> Lihat Tabel Pesanan </a></h2><br>";
?>
</center>
</div>