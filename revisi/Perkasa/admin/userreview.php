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
		 <div class='menu' align='center'><?php include '../include/menuutamaadmin.php';  ?></div>
		 <div class='menuduaadm'><?php include'../include/menuduaadmin.php';?></div>
			 <div class='isi'>
				<h3>User's Reviews </h3>

							<div class='userreview'>
										<table border='0' cellspacing='0'>
										<tr>
											<th>Oleh</th><th>Produk</th><th>Komentar</th><th>Del</th>
										</tr>
									<?php
										include '../include/connect.php';
										$a=mysql_query("select * from review",$con);
										while($x=mysql_fetch_array($a)){
										echo"
											<tr>
												<td><a href='userdetail.php?id=".$x[1]."'>".$x[2]."</a></td><td width='50px'><a href='detail_produk.php?id=".$x[3]."'>".$x[3]."</a></td><td>".$x[4]."</td><td width='15px'><a href='prohpsrev.php?no=".$x[0]."'><img src='../img/del.gif'></a></td>
											</tr>


										";
										}

									?>
									</table>
									<ul>
									Nb:
										<li>Klik Nama Pereview atau yang ada pada kolom Oleh maka anda akan dibawa ke halaman profil user dengan id yang tertera</li>
										<li>Klik No Id yang ada pada kolom Produk maka anda akan dibawa ke halaman detail produk dengan id tersebut atau dengan kata lain anda akan dibawa ke halaman dimana user tersebut memposting reviewnya</li>
									</ul>
							</div>
			</div>

		 <div class='footer' align='center'><?php include '../include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php'; ?></div>
</div>

</body>
<!--//<div class='hslrev'><span class='pereview'>".ucwords($x[2])."</span> :<br> <span class='revnya'>".ucfirst($x[4])."</span> </div> -->
</html>
<?php } ?>
