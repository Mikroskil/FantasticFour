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
				<h3>Selamat Datang Admin <?php echo $_SESSION['nama']; ?> </h3>



			 </div>


		 <div class='footer' align='center'><?php include '../include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php'; ?></div>
</div>

</body>
</html>

<?php } ?>