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

			<h3>Your Order Has Been Processed!</h3>
			<p>Your order has been successfully processed! Your products will arrive at their destination within 2-5 working days.<br>

			You can view your order history by going to the 'My Account' page and by clicking on 'History'.<br>

			Please direct any questions you have to the store owner.<br>
			Thanks for shopping with us online!<br></p>




		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
		 		 <hr style='width:50%; border:1px solid #ddd;'/>
		<div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>



</body>
</html>

<?php } ?>