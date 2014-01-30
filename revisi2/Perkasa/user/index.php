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
		 <h3>selamat datang kembali <?php echo $_SESSION['nama']; ?></h3>

		<div class='nav'>
			<center>
			<table>
			<tr>

			<td height='60'><a href='history.php'>Lihat History Belanja Disini</a></td>
			</tr>

			</table>
			</center>
		</div>

		 <div class='userdetail'>




		 <p class='par'>Informasi Akun Anda</p>
		 			<table border='0' cellspacing='0' width='450px'>
		 				<?php
		 						include'../include/connect.php';

		 					$email=$_SESSION['email'];
		 					$q=mysql_query("select * from user where email='$email'",$con);
		 					$x=mysql_fetch_array($q);
		 					echo "
		 					<form action='formeditprofil.php?id=".$x[0]."' method='get'>
		 					<tr><td width='100'>Nama</td><td>".$x[1]."<input type='hidden' name='id' value='".$x[0]."'></td></tr>
		 					<tr><td>Email</td><td>".$x[4]."</td></tr>
		 					<tr><td>Password</td><td><input type='password' class='pass' value='".$x[2]."' disabled></td></tr>
		 					<tr><td>Telp</td><td>".$x[5]."</td></tr>
		 					<tr><td>Alamat</td><td>".$x[3]."</td></tr>
		 					<tr><td>J. Kelamin</td><td>";
		 					if($x[3]==1){
		 						echo"Perempuan";
		 						}
		 						else{
		 						echo"Pria";
		 						}; echo"</td></tr>
		 						<tr><td>Lahir</td><td>".$x['lahir']."</td></tr>
		 						<tr><td>Provinsi</td><td>".$x['provinsi']."</td></tr>
		 						<tr><td>Kota</td><td>".$x['kota']."</td></tr>
		 						<tr><td>Kode Pos</td><td>".$x['pos']."</td></tr>
		 						<tr><td>Fax</td><td>".$x['fax']."</td></tr>
		 					<tr><td colspan='2' align='right' height='50px'><input type='submit' value='Edit' class='tombol'></td></tr></form>
		 					";
		 				?>
		 			</table>
		</div>



		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
		 		 <hr style='width:50%; border:1px solid #ddd;'/>
		<div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>



</body>
</html>

<?php } ?>