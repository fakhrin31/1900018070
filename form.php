<a href="form.html">Kembali ke Form</a>
<?php 

$error = false;

if(@$_POST['nama']==''){
	echo "validasi nama tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['alamat']==''){
	echo "validasi alamat tidak boleh kosong<br/>";
}
if(strlen(@$_POST['telpon']) < 10){
	echo "validsi nomor telpon harus lebih dari 9 digit<br/>";
	$error = true;
}
if(@$_POST['kelamin']==''){
	echo "validasi jenis kelamin tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['agama']==''){
	echo "validasi agama tidak boleh kosong<br/>";
	$error = true;
}
if(@$_POST['kwn']==''){
	echo "validasi kewarganegaraan tidak boleh kosong<br/>";
	$error = true;
}
if(!$error){
	echo "<br><h2>Terimakasih data sudah valid</h2>";
}
 ?>
