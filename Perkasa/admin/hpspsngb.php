<?php
include '../include/connect.php';
$no=$_GET['no'];

$query=mysql_query("delete from bukutamu where no=$no");
if($query){
echo "<script>alert('Data Berhasil Dihapus');window.location.href='bukutamu.php'</script>";
}
else{
echo "<script>alert('Gagal !!!');history.go(-1);</script>";
}



?>