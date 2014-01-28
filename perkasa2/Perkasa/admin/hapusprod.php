<?php

include '../include/connect.php';

$id=$_GET['id'];

$r=mysql_query("delete from produk where id='$id'");
if($r){
echo"<script>alert('Data Berhasil Dihapus ');window.location.href='lihatproduk.php';</script>";
}
else{
echo"<script>alert('Data Gagal Dihapus ');history.go(-1);</script>";
}
?>