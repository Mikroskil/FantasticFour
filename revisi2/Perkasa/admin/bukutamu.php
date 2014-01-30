<?php
session_start();
if(!$_SESSION['email']){
header("location:../log.php");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Perkasa Gaming Shop</title>
<link rel='stylesheet' href='../my.css'  type="text/css">
<?php include'../include/fav.php';?>
</head>

<body>

<div class='utama'>

		<a name='atas'><div class='header'></div></a>
      	 <div class='menu' align='center'><?php include '../include/menuutamaadmin.php'; ?></div>
      	 	<div class='menuduaadm'><?php include'../include/menuduaadmin.php';?></div>

	 <div class='isi'>

			 <h3>Buku Tamu</h3>
				<div class='admgb'>
				<table border='0' cellspacing='10' align='center'>
					<?php

						include'../include/connect.php';

						$query=mysql_query("select * from bukutamu order by tanggal desc",$con);
						while($x=mysql_fetch_array($query)){
						echo "<tr><td class='admtd'><a href='".$x[2]."' class='admnamabtamu'>".$x[1]."</a> : ".$x[3]."<br><span class='tglbtamu'>".$x[4]."</span></td><td><a href='hpspsngb.php?no=".$x[0]."'><img src='../img/del.gif' style='border:none;-moz-box-shadow:0px 0px 0px; box-shadow:0px 0px 0px; -webkit-box-shadow:0px 0px 0px;' title='Hapus'></a></td></tr>";
						}

					?>
				</table><br><Br>
				</div>

	 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>



</body>
</html>

<?php } ?>
