<?php
session_start();
if(!$_SESSION['email']){
header("location:../index.php");
}
else{

include '../include/connect.php';

$jlh=$_POST['jlh'];
$idp=$_POST['idp'];
$harga=$_POST['hargaprod'];
$id=$_SESSION['id'];
$stok=$_POST['stok'];

if($jlh > $stok){
echo "<script>alert('Maaf Stok Produk Tersebut Tidak Mencukupi Sebanyak Yang Anda Pesan');history.go(-1);</script>";
}
else{

	$st=$jlh*$harga;





	$x=mysql_query("update cart set jumlah='$jlh', subtotal='$st' where id_produk='$idp' and id_pembeli='$id'");
	if($x){
	echo "<script>window.location.href='cart.php';</script>";

	}
	else{
	echo "<script>alert('Gagal !'); history.go(-1);</script>";
	}
}
}
?>