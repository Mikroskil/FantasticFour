<?php
date_default_timezone_set("asia/jakarta");
$tgl=date("Y-m-d H:i:s");
session_start();
$id=$_SESSION['id'];
include '../include/connect.php';

$aaa=mysql_query("select idfaktur from cart where id_pembeli='$id' and status=0");

$seleketep=mysql_fetch_array($aaa);
$idf=$seleketep['idfaktur'];

$a=mysql_query("select * from hitung_total_harga_cart where id_pembeli='$id' and idfaktur='$idf'");

$aa=mysql_query("select * from cart where id_pembeli='$id' and status=0");

$c=0;
while($b=mysql_fetch_array($aa)){
$c += $b['subtotal'];
}

	if(mysql_num_rows($a)==0)
		{
			$d=mysql_query("insert into hitung_total_harga_cart values('$idf','$id','$c','$tgl','')");
			if($d)
				{
					 header("location:pengiriman.php");
				}
			else
				{
					 echo "<script>alert('Gagal ! Silahkan Hubungi Admin');history.go(-1);</script>";
				}
		}
	else
		{
			$ggg=mysql_query("update hitung_total_harga_cart set total_bayar='$c',idfaktur='$idf',tgl='$tgl' where id_pembeli='$id' and idfaktur='$idf'");
			if($ggg)
				{
					 header("location:pengiriman.php");
				}
			else
				{
					echo "<script>alert('Gagal ! Silahkan Hubungi Admin');history.go(-1);</script>";
				}

		}



?>