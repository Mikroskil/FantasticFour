<?php

	include'../include/connect.php';


$id=$_POST['id'];
$a=$_POST['nama'];
$b=$_POST['password'];
$c=$_POST['alamat'];
$d=$_POST['email'];
$e=$_POST['telp'];
$f=$_POST['provinsi'];
$g=$_POST['kota'];
$h=$_POST['pos'];
$i=$_POST['fax'];


$q=mysql_query("select * from user where id=$'$id'");

$qq=mysql_query("update user set nama='$a',password='$b',alamat='$c',email='$d',telp='$e',provinsi='$f', kota='$g', pos='$h', fax='$i' where no='$id'" );
if($qq){
echo"<script>alert('Data Berhasil diUpdate, coba relog bila ada data yang belum berubah');window.location.href='index.php';</script>";
}
else{
echo"<script>alert('Error');</script>";
}
?>