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
<script type="text/javascript" language="javascript" src="../keranjang.js"></script>

</head>



<body onscroll="kfloatLayer.alignFloatLayer()">

<div class='utama'>
		<a name='atas'><div class='header'></div></a>
      			 <div class='menu' align='center'><?php include '../include/menuutamaadmin.php';  ?></div>
		 			<div class='menuduaadm'><?php include'../include/menuduaadmin.php';?></div>

		 <div class='isi'>
		 	<div class='detailprod'>
			<?php
				include '../include/connect.php';
				$id=$_GET['id'];

				$q=mysql_query("select * from produk where id='$id'");
				while($x=mysql_fetch_array($q)){

				echo "<form action='pro_tocart.php' method='post'>
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
			<div class='frmreview'>
			<form action='pro_review.php' method='get'>
			<p class='pxw'>Tulis Sesuatu Tentang Produk ini</p>
			<input type='hidden' name='id' value='<?php echo "$id"; ?>'>
			<textarea cols='90' rows='3' name='review'></textarea>
			<input type='submit' class='tombolrevcart' value='Post'>
			<a name='review' style='display:none;'></a>
			</form>


			</div>

			</div>
			<div class='review'>
			<center><p class='pxw'>Komentar Konsumen Tentang Produk Ini</p></center>



				<?php
				$h=mysql_query("select * from review where id_produk='$id'");
								if(mysql_num_rows($h)==0){
								echo "<p class='blmadarev'>Belum Ada Review</p>";
								}
				else{

				$q=mysql_query("select * from review where id_produk='$id'",$con);
				while($x=mysql_fetch_array($q)){
				echo "

						<div class='hslrev'><span class='pereview'>".ucwords($x[2])."</span> <img src='../img/comment.gif' class='iconn'><br> <span class='revnya'>".ucfirst($x[4])."</span> </div>

				";
				}}

				?>



			</div>
		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
			 <hr style='width:50%; border:1px solid #ddd;'>
		 <div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>


						<div class="keranjang" id="floatlayer" align="center">
						<div class="tblkeranjang">
							<?php

								$queryrandom=mysql_query("select * from produk order by rand() limit 1");
								$ambilrandom=mysql_fetch_array($queryrandom);
								$nilairandom=$ambilrandom['gambar'];
								$linkz=mysql_query("select * from produk where gambar='$nilairandom'");
								$link=mysql_fetch_array($linkz);

							?>
							<img src='../img/topsell.gif'><p class='judul'>Coba Lihat Produk yang Ini </p>
								<a href='detail_produk.php?id=<?php echo $link['id'] ?>'><img src='../img/detailprod/<?php echo $nilairandom; ?>' class='imgprod'></a>
						</div>
						</div>

						<script type="text/javascript">
							kfloatLayer.init('floatlayer',0,137,5);
						</script>


</body>
</html>
<?php } ?>