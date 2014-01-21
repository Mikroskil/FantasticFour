<?php

	include '../include/connect.php';


	$nama1=$_POST['nama'];
	$nama2=$_POST['namaa'];
	$nama="$nama1 $nama2";
	$password=$_POST['pass1'];
	$password2=md5($password);
	$alamat=$_POST['alamat'];
	$email=$_POST['email'];
	$telp=$_POST['telp'];
	$enpass=md5($password);
	$tgl=date("Y-m-d");
	$jk=$_POST['jk'];
	$tgllahir=$_POST['tgl'];
	$blnlahir=$_POST['bln'];
	$thnlahir=$_POST['thn'];
	$lahir="$thnlahir-$blnlahir-$tgllahir";
	$provinsi=$_POST['provinsi'];
	$kota=$_POST['kota'];
	$pos=$_POST['pos'];
	$fax=$_POST['fax'];

	$qu=mysql_query("select * from user where email='$email'");
	$cek=mysql_num_rows($qu);

	if($cek!=0){
	echo "<script>alert('Email tersebut sudah diregister ! Silahkan login');javascript:history.go(-1);</script>";
	}
	else{
	$in=mysql_query("insert into user values('','$nama','$password','$alamat','$email','$telp','0','$tgl','$jk','$lahir','$provinsi','$kota','$pos','$fax')");
		if($in){
		echo "<script>alert('Registrasi Sukses ! Silahkan Login...');window.location.href='../log.php';</script>";
		}
		else{
		echo "<script>alert('Pendaftaran Gagal !!!');javascript:history.go(-1);</script>";
		}
	}


?>