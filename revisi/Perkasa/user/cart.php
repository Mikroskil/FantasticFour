<?php
session_start();
if(!$_SESSION['email']){
	header("location:../login.php");
}
else{

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Perkasa Gaming Shop</title>
<link rel='stylesheet' href='../my.css'  type="text/css">
<script type="text/javascript" language="javascript" src="../keranjang.js"></script>
<?php include'../include/fav.php';?>


</head>

<body onscroll="kfloatLayer.alignFloatLayer()">
<div class="utama" >

		<a name='atas'><div class='header'></div></a>

      		 <div class='menu' align='center'><?php include'../include/menuutamauser.php';?></div>

		 <div class='isi'>

		 	<h3>Pesanan Anda</h3>

		 		<div class='cart'>


						<table width='80%' border='0' align='center' cellspacing='4'>

							<?php
							$totalbelanja=0;
   						    $g=$_SESSION['id'];
							$a=mysql_query("select * from cart where id_pembeli='$g' and status=0",$con);

							if(mysql_num_rows($a)==0)
									{
										echo "<div class='warn'><p class='blmadacart'><img class='icon' src='../img/warn.gif'>Anda belum memiliki pesanan<br> silahkan tentukan pesanan anda melalui <a href='produk.php'>link produk</a> ini atau  yang ada diatas.</p></div>";
									}
							else
									{
										while($b=mysql_fetch_array($a)){

										$totalbelanja+=$b[6];

										echo "
											<tr>
												<td width='60' align='center'><img src='../img/detailprod/".$b[7]."'></td>
												<td height='25px;'>
													<a href='detail_produk.php?id=".$b[2]."' class='namaprod'>".ucwords($b[3])."</a><br><br>
													<span class='hargaprod'>Harga Rp. ".number_format($b[4],0,'.','.')."</span><br><br>
													<form name='frmjlh' action='pro_updatejumlahcart.php' method='post'>
													<input type='hidden' name='hargaprod' value='".$b[4]."'>
													<input type='hidden' value='".$b[2]."' name='idp'>
													<input type='hidden' value='".$b[8]."' name='stok'>
													<span class='jumlah'>Jumlah <input maxlength='2' type='text' name='jlh' value='".$b[5]."' size='2'>";


													echo " <input type='submit' value='update' class='tomupd'></form> <br><br><br>



													<a href='pro_delcart.php?idb=".$b[2]."&idp=".$b[1]."'>hapus dari pesanan</a></td></span>
											</tr>
											<tr>
												<td colspan='2'height='4px;' align='right' class='subttl'>Sub Total : Rp. <input type='text' name='".$b[0]."'disabled='disabled' value='".number_format($b[6],0,'.','.')."' size='8'></td>
											</tr>

											";
											}
										}
								?>

											<?php

											if(mysql_num_rows($a)==0){
											echo "";}

											else{
											echo"


		<tr>
			 	<td colspan='2' align='center'>
			 		<form action='pro_hitung_total_harga_cart.php' method='get'><p class='hargax'>Total Belanjaan Anda</p>
					<p class='totalbelanja'>Rp. ".number_format($totalbelanja,0,'.','.')."</p>
					<input type='submit' class='tombol' id='tombol' value='P R O S E S  P E N G I R I M A N'>
					</form>
				</td>
		</tr>

											";
											}
											?>
									</table>
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