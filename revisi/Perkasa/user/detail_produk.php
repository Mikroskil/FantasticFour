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
<script type="text/javascript" language="javascript" src="../keranjang.js"></script>

</head>



<body onscroll="kfloatLayer.alignFloatLayer()">

<div class='utama'>
		<a name='atas'><div class='header'></div></a>
      		  <div class='menu' align='center'><?php include'../include/menuutamauser.php';?></div>

		 <div class='isi'>
		 	<div class='detailprod'>
			<?php
				include '../include/connect.php';
				$id=$_GET['id'];

				$q=mysql_query("select * from produk where id='$id'");
				while($x=mysql_fetch_array($q)){

				echo "<form action='pro_tocart.php' method='post'>
					  <input type='hidden' name='idpembeli' value='".$_SESSION['id']."'>
					  <input type='hidden' name='idproduk' value='".$id."'>
					  <input type='hidden' name='gbr' value='".$x[5]."' >
					  <input type='hidden' name='stok' value='".$x[3]."'>
					  <input type='hidden' name='namaprod' value='".$x[1]."'>
					  <input type='hidden' name='hargaprod' value='".$x[2]."'>

					  <input type='text' value='".strtoupper($x[1])."' class='nmprod' disabled='disabled'>
					  <br><br><span class='harga'>Rp. <input class='txtharga' type='text' value='".$x[2]."' name='hargaprod' disabled='disabled' size='7'></span>
					  <img src='../img/detailprod/".$x[5]."' ><p class='ketprod'>".ucfirst($x[4])."</p>
					  <input type='submit' class='tombolrevcart' value='Tambah ke Daftar Pesanan'></form>
					  ";

				}

			?>
			

			</div>
			
		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
			 <hr style='width:50%; border:1px solid #ddd;'>
		 <div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>


						
						<script type="text/javascript">
							kfloatLayer.init('floatlayer',0,137,5);
						</script>


</body>
</html>
<?php } ?>