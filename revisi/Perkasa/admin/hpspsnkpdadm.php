<?php
include '../include/connect.php';

$no=$_GET['no'];
$sql=mysql_query("delete from psnkpdadm where no=$no") ;

if($sql){
echo "<script>alert('Pesan  Berhasil Dihapus !');window.location.href='pesan.php';</script>";
}
else{
echo "<script>alert('Gagal !!!');history.go(-1);";
}
?>