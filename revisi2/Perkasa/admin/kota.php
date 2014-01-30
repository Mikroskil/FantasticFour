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
				<h3>Kelola tarif kota pembeli</h3>

				<center><form action='pro_tambah_kota.php' method='post'>
				<input type='text' required placeholder='Nama Kota' name='nama'>
				<input type='text' required placeholder='Tarif' name='tarif'>
				<input type='submit' value='Tambahkan' class='tombol'>
				</form></center>

				<div class='kota'>
				<table align='center' border='1' cellspacing='0' cellpadding='0'>
					<tr>

						<th width='200'>Kota</th>
						<th width='100'>Tarif(Rp)</th>
					</tr>

					<?php
					include '../include/connect.php';

					$a=mysql_query("select * from kota");
					while($b=mysql_fetch_array($a)){
					echo"
					<tr>

						<td>".$b['nama']."</td>
						<td>".number_format($b['tarif'],0,'.','.')."</td>
					</tr>";
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