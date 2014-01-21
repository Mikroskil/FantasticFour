<?php
include '../include/connect.php';
$id=$_POST['id'];
$nama=$_POST['namaprod'];
$harga=$_POST['hargaprod'];
$stok=$_POST['stokprod'];
$ket=$_POST['ketprod'];

$q=mysql_query("update produk set namaproduk='$nama', harga='$harga', stok='$stok', keterangan='$ket' where id=$id");
if($q){
echo "<script>alert('Update Data Berhasil');window.location.href='lihatproduk.php';</script>";
}
else{
echo "<script>alert('Update Data Gagal');history.go(-1);</script>";
}


 ?>