<?php

	include '../include/connect.php';

	$time=date("Y-m-d");
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$pesan=$_POST['pesan'];

if($nama=='' || $email=='' || $pesan==''){
echo "<script>alert('Tolong Isi Semua Field !!!');javascript:history.go(-1);</script>";
}
else{
$in=mysql_query("insert into psnkpdadm values('','$nama','$email','$pesan','$time')");
	if($in){
		echo "<script>alert('Pesan Anda Sudah Terkirim !');window.location.href='cart.php';</script>";
	}
	else{
		echo "<script>alert('Something Wrong ! Pls Check');javascript:history.go(-1);</script>";
	}
}

?>