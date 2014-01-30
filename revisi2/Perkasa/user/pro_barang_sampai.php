<?php

	include'../include/connect.php';

	$id=$_GET['id'];

	mysql_query("update hitung_total_harga_cart set diterima='1' where idfaktur='$id'");

	echo "<script>alert('Terima kasih sudah mau mengkonfirmasi pesanan anda');</script>";

	header("location:history.php");




?>