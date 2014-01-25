<?php
include'../include/connect.php';
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

					<center> <h3>Manage User</h3></center>

		 				<div class='tblmngusr'>

			 				<form method='get'>

							<table align='center' border='0' width='' cellspacing='5'>

							<tr><th>Email</th><th>Password</th><th width='50'>Admin</th><th>Opsi</th></tr>

			 					<?php

										 $query=mysql_query("select * from user",$con);

										 while($x=mysql_fetch_array($query)){
										 echo "<tr><td width='205px' align='center'><span id='email".$x[4]."'>".$x[4]."</span></td><td align='center' width='205px'><span>".$x[2]."</span></td><td align='center'><span>".$x[6]."</span></td><td align='center' width='140px'><a href='formupdate.php?no=".$x[0]."' onclick=''>Ubah</a> <span>|</span> <a href='hapususer.php?no=".$x[0]."'>Hapus</a> <span>|</span> <a href='userdetail.php?id=".$x[0]."'>Detail</a> </td></tr>";
										 }
								?>

							</table>

							</form>

						</div>
				 </div>

		 <div class='footer' align='center'><?php include '../include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php'; ?></div>
</div>



</body>
</html>
<?php } ?>