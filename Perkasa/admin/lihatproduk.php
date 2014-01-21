<?php
session_start();
if(!$_SESSION['email']){
header("location:../log.php");
}
else {
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

					<h3>Produk</h3>

						<div class='lihatproduk'>

							<table border="0" align='center' cellspacing='1'>

								<tr><th>Id</th><th>Nama</th><th>Harga</th><th>Stok</th><th>Keterangan</th><th>Added</th><th>Gbr</th><th>Option</th></tr>

									<?php
										 include '../include/connect.php';
										 $query=mysql_query("select * from  produk",$con);
										 while ($x=mysql_fetch_array($query)){
									 	echo "<tr><td>".$x[0]."</td><td>".$x[1]."</td><td>".$x[2]."</td><td>".$x[3]."</td><td>".$x[4]."</td><td>".$x[6]."</td>
					 					<td>";
					 					if($x[5]!="noimg.jpg") echo  ("Y");else print("-");
					 					echo "</td><td><span class='lihatproduk'><a href='editproduk.php?id=".$x[0]."'>Edit</a> <br> <a href='hapusprod.php?id=".$x[0]."'>Hapus</a></span></td></tr>";
					 					}
					 				?>
							</table>

						</div>
		 		</div>

		 <div class='footer' align='center'><?php include '../include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php'; ?></div>

</div>


</body>
</html>
<?php } ?>