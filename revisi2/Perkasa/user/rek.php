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
			<?php

			#$n=$_REQUEST['n'];
			?>
			<h3>Sukses !</h3>

			<p class='pesansukses'>Pesanan anda telah kami terima dan sedang kami proses<br>
			Untuk proses yang lebih cepat silahkan langsung konfirmasi <u>Nomor Pembelian</u> anda dengan sms atau menghubungi setelah mentransfer sejumlah dari pesanan anda

			<br><br>Nomor Pembelian Anda :<?php echo $_GET['n']; ?><br>Sms/Hub Ke : 057869872067<br><br>
			Contoh: NP 1</p>
			<p class='pesansukses'>Anda bisa melihat History pembelian anda <a href='history.php'>disini</a></p>

		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
		 		 <hr style='width:50%; border:1px solid #ddd;'/>
		<div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>



</body>
</html>

<?php } ?>