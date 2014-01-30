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

      	<div class='menu' align='center'><?php include'../include/menuutamaadmin.php';?></div>
      	<div class='menuduaadm'><?php include'../include/menuduaadmin.php';?></div>

			 <div class='isi'>

				<h3>Tambah Produk </h3>

					<?php
						include '../include/connect.php';
						$id=$_GET['id'];
						$q=mysql_query("select * from produk where id=$id",$con);
						$x=mysql_fetch_array($q);
						echo "
							<form action='proeditproduk.php' method='post' ENCTYPE='multipart/form-data'>
								<div class='admtmbhprod'>
								<table border='0' width='400px' >
									<tr><td><br></td></tr>
									<tr><td><input type='hidden' value='".$id."' name='id'></td></tr>
									<tr>
										<td><p>Nama</p></td><td><input type='text' size='40' name='namaprod' value='".$x[1]."'></td>
									</tr>
									<tr>
										<td><p>Harga</p></td><td><input type='text' size='40' value='".$x[2]."' name='hargaprod'></td>
									</tr>
									<tr>
										<td><p>Stok</p></td><td><input type='text' size='40' name='stokprod' value='".$x[3]."'></td>
									</tr>
									<tr>
										<td><p>Keterangan</p></td><td><textarea cols='37' rows='6' name='ketprod'>".$x[4]."</textarea></td>
									</tr>
									<tr>
										<td><p>Gambar</p></td><td><img src='../img/detailprod/".$x[5]."' width='100' height='120'><br>
											 <input type='file' name='gbr' size='35' readonly='readonly'></td>
									</tr>
									<tr><td><br><br></td></tr>
									<tr>
										<td colspan='2' align='right'><input type='submit' value='Update Data'></td>
									</tr>
									<tr><td><br></td></tr>
								</table>
								</div>
							</form> ";
 					?>

		 </div>

		 <div class='footer' align='center'><?php include '../include/menufooter.php';?></div>
			 <hr style='width:50%; border:1px solid #ddd;'>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php';?></div>
</div>



</body>
</html>

<?php } ?>