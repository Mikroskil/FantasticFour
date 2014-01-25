<?php
session_start();
date_default_timezone_set("asia/jakarta");
if(!$_SESSION['email'])
	{
		header("location:../logreg.php");
	}

else{

	include '../include/connect.php';

	$n=$_GET['n'];
	$cb=$_POST['cp'];
	$ttl=$_GET['ttl'];
	$idf=$_GET['idf'];

		if($cb==2)
			{
				$a=mysql_query("select * from cart");
				$b=mysql_fetch_array($a);
				$tgl=date("Y-m-d H:i:s");
				$id=$_SESSION['id'];
				$q=mysql_query("select idfaktur from cart where id_pembeli=$id and status=0 group by id_pembeli");
				$idfaktur=mysql_fetch_array($q);
				$c=mysql_query("insert into pesanan values('','$idfaktur[0]','$tgl')");
				$q=mysql_query("update cart set status=1,tgl='$tgl' where idfaktur=$idfaktur[0]");
				mysql_query("update hitung_total_harga_cart set total_bayar='$ttl' where id_pembeli='$_SESSION[id]' and idfaktur=$idf");

				header("location:rek.php?n=".$n."");

			}

		else if($cb==3)
			{
				header("location:paypal.php");
			}
}
?>
