<?php
session_start();
include '../include/connect.php';
$t=$_GET['x'];
$a=mysql_query("Select * from cart where id='$_SESSION[id]'");

$b=mysql_query("update cart set sampai=1 where id_pembeli='$_SESSION[id]' and id_produk='$t'");
header("location:history.php");

?>