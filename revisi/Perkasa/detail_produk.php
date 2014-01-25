<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Perkasa Gaming Shop</title>
<?php include'include/fav.php';?>
<link rel='stylesheet' href='my.css'  type="text/css">
<script type="text/javascript" language="javascript" src="keranjang.js"></script>

</head>
<body onscroll="kfloatLayer.alignFloatLayer()">

<div class='utama'>
		<a name='atas'><div class='header'></div></a>
      		  <div class='menu' align='center'><?php include'include/menuutamaindex.php';?></div>

		 <div class='isi'>
		 	<div class='detailprod'>
			<?php
				include 'include/connect.php';
				$id=$_GET['id'];
				$q=mysql_query("select * from produk where id='$id'");
				while($x=mysql_fetch_array($q)){
				echo "<input id='nmprod' class='nmprod' type='text' disabled='disabled' name='namaprod' value='".strtoupper($x[1])."'>";
				echo "<br><br><span class='harga'>Rp. <input type='text' value='".number_format($x[2],0,'.','.')."' name='hargaprod' disabled='disabled' size='9'></span>";
				echo "<img src='img/detailprod/".$x[5]."' ><p class='ketprod'>".ucfirst($x[4])."</p> ";
				echo "<a href='user/cart.php' class='tombolrevcart'>Tambah ke Keranjang</a><br><table><tr><td class='tempatwarn'><p class='warntocartrev'><img class='icon' src='img/warn.gif'> Untuk menggunakan fungsi keranjang/Cart dan Review anda harus login terlebih dahulu</img></p></td></tr></table> ";
				}

			?>

			</div>
		 </div>

		 <div class='footer' align='center'><?php include'include/menufooter.php';?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include'include/footerdesc.php';?></div>
</div>

<script type="text/javascript">
	kfloatLayer.init('floatlayer',0,137,5);
</script>


</body>
</html>
