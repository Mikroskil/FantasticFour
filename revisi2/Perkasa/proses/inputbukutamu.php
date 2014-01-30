<?php

	include '../include/connect.php';
	$waktu=date("Y-m-d H:i:s");
	$nama=$_POST['nama'];
	$url=$_POST['url'];
	$pesan=$_POST['pesan'];

	if($nama=='' || $url=='' || $pesan==''){
		echo"<script>alert('Field Tidak Boleh Ada Yg Kosong !!!');javascript:history.go(-1); </script>";
	}
	else{
		$input=mysql_query("insert into bukutamu values('','$nama','$url','$pesan','$waktu')");
		if($input){
					echo "<script>window.location.href='../bukutamu.php';</script>";
					}
					else{
					echo "<script>alert('Gagal !!!');history.go(-1);</script>";
			}

	}




?>