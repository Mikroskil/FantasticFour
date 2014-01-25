<?php
include '../include/connect.php';
$no=$_GET['no'];
$x=mysql_query("delete from review where no='$no'");
if($x){
header("location:userreview.php");
}
else
{
echo"<script>alert('Gagal !');history.go(-1)l</script>";
}
?>