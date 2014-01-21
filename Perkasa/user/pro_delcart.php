<?php
include'../include/connect.php';

$idb=$_GET['idb'];
$idp=$_GET['idp'];

$g=mysql_query("delete from cart where id_produk='$idb' and id_pembeli='$idp'");
if($g){
header("location:cart.php");
}
else{
echo "<script>alert('Gagal !');history.go(-1);</script>";
}

?>