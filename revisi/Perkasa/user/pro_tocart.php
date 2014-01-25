<?php

include '../include/connect.php';
date_default_timezone_set("asia/jakarta");
$tgl=date("Y-m-d H:i:s");
$idprod=$_POST['idproduk'];
$idpem=$_POST['idpembeli'];
$nmprod=$_POST['namaprod'];
$hrprod=$_POST['hargaprod'];
$gbrprod=$_POST['gbr'];
$stokprod=$_POST['stok'];

	$cek=mysql_query("select * from cart where id_pembeli='$idpem' and id_produk='$idprod' and status='0'");

	if(mysql_num_rows($cek)==0)
		{
			$q=mysql_query("select idfaktur from cart where id_pembeli='$idpem' and status=0");
			$bsr=mysql_fetch_array($q);
			$idf=$bsr[0];

				if (mysql_num_rows($q)==0)
					{
					$bsr=mysql_query("select MAX(idfaktur) from cart");
					$qt=mysql_fetch_array($bsr);
					$idf=$qt[0]+1;
					}

			$b=mysql_query("insert into cart values('','$idpem','$idprod','$nmprod','$hrprod','1','$hrprod','$gbrprod','$stokprod','0','$idf','$tgl')");

			if($b)
				{
				echo"<script>alert('Produk Berhasil Ditambahkan');window.location.href='produk.php';</script>";
				}
			else
				{
				echo"<script>alert('Gagal');history.go(-1);</script>";
				}
		}
	else
		{
		echo"<script>alert('Item Tersebut Sudah Ditambahkan Sebelumnya !');window.location.href='cart.php'</script>";
		}
?>