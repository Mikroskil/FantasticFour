<?php
session_start();

include '../include/connect.php';

$id=$_GET['id'];
$pesan=$_GET['review'];
$x=mysql_query("insert into review values('','$_SESSION[id]','$_SESSION[nama]','$id','$pesan')");
	if($x){
					echo "<script>alert('Terima kasih telah mereview produk kami');window.location.href='detail_produk.php?id=".$id."';</script>";
					}
					else{
					echo "<script>alert('Gagal !!!');history.go(-1);</script>";
			}

	?>