<?php
session_start();
if(!$_SESSION['email']){
header("location:../log.php");
}
else{ ?>
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

      		 <div class='menu' align='center'><?php include '../include/menuutamaadmin.php';  ?></div>
      		 <div class='menuduaadm'><?php include'../include/menuduaadmin.php';?></div>

		 		<div class='isi'>

					<h3>Pesan Buat Anda!</h3>

						<table width='95%'  border='0' align='center' cellpadding='0' cellspacing='10'>

							<?php
								include '../include/connect.php';
								$query=mysql_query("select * from psnkpdadm order by tanggal desc",$con);
								while($x=mysql_fetch_array($query)){
									echo "<tr><td class='psnkpdadmtd'  valign='top'><span class='psnkpdadm'>Tanggal :".$x[4]."<br>Dari &nbsp;&nbsp;   : ".$x[1]."<br>Email &nbsp;: ".$x[2]."<br>Pesan : ".$x[3]."</span></td><td><a href='hpspsnkpdadm.php?no=".$x[0]."' onclick='return confirm(\"Yakin ?\");'><img src='../img/del.gif' style='border:none;-moz-box-shadow:0px 0px;' title='Hapus Pesan'></a></td></tr>";
								}
							?>
						</table>
				</div>

		 <div class='footer' align='center'><?php include '../include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php'; ?></div>

</div>

</body>
</html>
<?php } ?>