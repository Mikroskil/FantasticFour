<?php
include '../include/connect.php';
date_default_timezone_set("asia/jakarta");

$email=mysql_real_escape_string($_POST['email']);


$pass=$_POST['password'];



	$tgl=date("Y-m-d H:i:s");
	$q=mysql_query("select * from user  where email='$email' and password='$pass'");
	$x=mysql_fetch_array($q);

		if($x['email'] == $email and $x['password']==$pass and $x['akses']=='1'){

		session_register('email');
		#session_register('password');
		$_SESSION['nama']=$x[1];
		$_SESSION['email']=$email_login;

		mysql_query("update user set lastlogin='$tgl' where akses='1'");
		header("location:../admin/index.php");
		}

		else if($x['email'] == $email and $x['password']==$pass and $x['akses']=='0'){

		session_register('email');
		#session_register('password');
		$_SESSION['nama']=$x['nama'];
		$_SESSION['id']=$x['no'];
		$_SESSION['email']=$email_login;


		mysql_query("update user set lastlogin='$tgl' where email='$email'");

		header("location:../user/cart.php");

		}

		else{
		echo "<script>alert('Login Gagal !');history.go(-1);</script>";
		}



?>