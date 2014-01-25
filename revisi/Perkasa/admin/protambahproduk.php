<?php
include '../include/connect.php';

$a=$_FILES['gbr'];
$b=$a['name'];
$c=$a['tmp_name'];

date_default_timezone_set("asia/jakarta");
$nama=$_POST['namaprod'];
$harga=$_POST['hargaprod'];
$stok=$_POST['stokprod'];
$ket=$_POST['ketprod'];
$tglinput=date("Y-m-d H:i:s");
#$tipe=$berkas['type']=="image/jpg" || $berkas['type']=="image/jpeg" || $berkas['type']=="image/png" || $berkas['type']=="image/gif";



if(
	($nama=="" || $nama==" ") ||
	($harga =="" || $harga==" ") ||
	($stok =="" || $stok==" ") ||
	($ket==""|| $ket==" ")){

	echo "<script>alert('Mohon Isi Semua Field !!!');history.go(-1);</script>";

}
else{



 		if($b==""){
		$b="noimg.jpg";
		}
		else{
		$ganda=copy($c,"../img/detailprod/".$b);
		}

		$in=mysql_query("insert into produk values('','$nama','$harga','$stok','$ket','$b','$tglinput')");

		if($in){
			echo "<script>alert('Data Berhasil Ditambahkan !'); window.location.href='lihatproduk.php';</script>";
		}
		else{
			echo "<script>alert('Gagal Tambah Data !!');history.go(-1);";
		}



}
?>