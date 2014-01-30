<?php
   include '../include/connect.php';
  $no=$_GET['no'];
$query=mysql_query("DELETE FROM user where no = $no");
	 				  if($query){
  							echo"<script>alert('User tersebut berhasil dihapus !');window.location.href='manageuser.php';</script>";}
					  else{
						    echo"<script>alert('Gagal !');history.go(-1);</script>";}
?>