<?php
session_start();
if(!$_SESSION['email']){
header("location:../logreg.php");
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
   		 <div class='menu' align='center'><?php include'../include/menuutamauser.php'; ?></div>

<div class='isi'>

	<h3>Informasi Alamat Anda</h3>

			<div class='pengiriman'><br>

					<p>Silahkan pastikan alamat dan kontak yang anda daftarkan dibawah ini <br>sudah benar dan terbaru sehingga<br> pengiriman produk pesanan anda berjalan dengan lancar</p>
					<table border='0' cellspacing='0' width='450px'>
						<?php
																	include'../include/connect.php';

																$email=$_SESSION['email'];
																$q=mysql_query("select * from user where email='$email'",$con);
																$x=mysql_fetch_array($q);
																echo "
																<tr><td width='100'>Nama</td><td>".$x[1]."<input type='hidden' name='id' value='".$x[0]."'></td></tr>
																<tr><td>Email</td><td>".$x[4]."</td></tr>

																<tr><td>Telp</td><td>".$x[5]."</td></tr>
																<tr><td>Alamat</td><td>".$x[3]."</td></tr>


																	<tr><td>Provinsi</td><td>".$x['provinsi']."</td></tr>
																	<tr><td>Kota</td><td>".$x['kota']."</td></tr>
																	<tr><td>Kode Pos</td><td>".$x['pos']."</td></tr>
																	<tr><td>Fax</td><td>".$x['fax']."</td></tr>
																<tr><td colspan='2' align='right' height='35px' valign='top'><a class='tmbledit' href='formeditprofil2.php?id=".$x[0]."'>Edit</a></td></tr>
																";
									?>
					</table>

					<center><a href='cara_bayar.php' class='kepembayaran'>Lanjut Ke Proses Pembayaran</a><br><br></center>

			</div>


</div>

<div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
		 <hr style='width:50%; border:1px solid #ddd;'/>
<div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>

</div>

</body>
</html>

<?php } ?>