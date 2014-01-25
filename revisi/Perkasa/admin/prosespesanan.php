<?php
include '../include/connect.php';
include '../include/class.stock.php';
$idf=$_GET['id'];

$Stock = new Stock();
$Stock->ProIdFaktur($idf);

mysql_query("update hitung_total_harga_cart set dibayar=1 where idfaktur='$idf'");
header("location:pesanankonsumen.php");

?>