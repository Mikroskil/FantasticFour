<?php
session_start();
if(!$_SESSION['email']){
header("location:../log.htm");
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
	<a name='atas' href='index.htm'><div class='header'></div></a>
   			  <div class='menu' align='center'><?php include '../include/menuutamaadmin.php';  ?></div>
   		  <div class='menuduaadm'><?php include'../include/menuduaadmin.php';?></div>
<div class='isi'>
	<h3>User Detail</h3>

		 <div class='userdetail'>
			<table border='0' cellspacing='0' width='600'>
				<?php
						include'../include/connect.php';

					$id=$_GET['id'];
					$q=mysql_query("select * from user where no='$id'",$con);
					$x=mysql_fetch_array($q);
					echo "
					<tr><td width='100'>Nama</td><td>".$x[1]."<input type='hidden' name='id' value='".$x[0]."'></td></tr>
					<tr><td>Email</td><td>".$x[4]."</td></tr>
					<tr><td>Password</td><td>".$x[2]."</td></tr>
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
						<tr><td colspan='2' align='right'><a href='javascript:history.go(-1)'>Back</a></td></tr>

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