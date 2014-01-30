<?php
include '../include/connect.php';

$a=$_POST['nama'];
$b=$_POST['tarif'];

mysql_query("insert into kota values('','$a','$b')");

header("location:kota.php");

?>