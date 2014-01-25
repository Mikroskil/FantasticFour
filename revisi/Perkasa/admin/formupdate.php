<?php
session_start();
if(!$_SESSION['email']){
header("location:../logreg.php");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head><title>Golden Bee</title>
<link rel='stylesheet' href='../my.css'  type="text/css">
<?php include'../include/fav.php';?>
</head>
<body>
	<div class='utama'>
		<a name='atas' href='index.htm'><div class='header'></div></a>
		  <div class='menu' align='center'><?php include '../include/menuutamaadmin.php';  ?></div>
   		  <div class='menuduaadm'><?php include'../include/menuduaadmin.php';?></div>
				 <div class='isi'>
		 			<h3>Edit Profil</h3>
		  			<form action='prosesupdateuser.php' method='post'>
		  			<div class='formeditprofil'>
		  		 	<table border='0'>
		 				<?php
						 include '../include/connect.php';
						 $id=$_GET['no'];
						 $q=mysql_query("select * from user where no='$id'");
						 $x=mysql_fetch_array($q);
						 echo "
						<tr><td colspan='2'><input type='hidden' value='".$x[0]."' name='id'></td></tr>
						<tr><td>Nama</td><td>: <input type='text' name='nama' size='40' value='".$x[1]."'></td></tr>
						<tr><td>Password</td><td>: <input type='text' name='password' size='40' value='".$x[2]."'></td></tr>
						<tr><td>Alamat</td><td>: <input type='text' name='alamat' size='40' value='".$x[3]."'></td></tr>
						<tr><td>Email</td><td>: <input type='text' name='email' size='40' value='".$x[4]."'></td></tr>
						";

						/*if($x[6]=='0'){
						echo "<script>document.getElementById('b').checked=true;</script>";

						}
						else{
						echo "<script>document.getElementById('a').checked=true;</script>";
						}
*/
						echo"
						<tr><td>Admin</td><td>: <input type='radio' value='1' name='adm' id='a' >Ya&nbsp;&nbsp;&nbsp;<input type='radio' id='b' value='0' name='adm' checked='checked'>Tidak</td></tr>
						<tr><td>Telp</td><td>: <input type='text' name='telp' size='40' value='".$x[5]."'></td></tr>
						<tr><td>Provinsi</td><td>: <input type='text' size='40' value='".$x['provinsi']."' name='provinsi'></td></tr>
						<tr><td>Kota</td><td>: <input type='text' size='40' value='".$x['kota']."' name='kota'></td></tr>
						<tr><td>Kode Pos</td><td>: <input type='text' size='40' value='".$x['pos']."' name='pos'></td></tr>
						<tr><td>Fax</td><td>: <input type='text' size='40' value='".$x['fax']."' name='fax'></td></tr>
						<tr><td colspan='2' align='right'><input type='button' value='Batal' onclick='javascript:history.go(-1);'>&nbsp;&nbsp;&nbsp;<input type='submit' value='Perbaharui'></td></tr>

						";
					   ?>
		 			</table>
		 			</div>
		  			</form>
		 		</div>

		 		<div class='footer' align='center'><?php include'../include/menufooter.php'; ?></div>
					<hr style='width:50%; border:1px solid #ddd;'>
		 		<div class='copyr' align='center' ><?php include'../include/footerdesc.php'; ?></div>
</div>
</body>
</html>
<?php } ?>