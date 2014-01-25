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
				<h3>Detail pesanan</h3>

				<?php

					include '../include/connect.php';
					$idf=$_GET['id'];
					$b=mysql_query("select * from hitung_total_harga_cart where idfaktur=$idf");
					$bb=mysql_fetch_array($b);
					$a=mysql_query("select * from cart where idfaktur=$idf");
					echo "<div class='detailfaktur'><table align='center'>
						<tr>
							<th colspan='4'>Id Faktur : ".$idf."</th>
						</tr>
						<tr>
							<th>Nama produk</th><th>Harga Satuan (Rp)</th><th>Jumlah</th><th>Sub total(Rp)</th>
						</tr>
					";
					while($aa=mysql_fetch_array($a)){

					echo "
						<tr>
							<td>".$aa['namaproduk']."</td><td>".number_format($aa['harga'],0,'.','.')."</td><td>".$aa['jumlah']."</td><td>".number_format($aa['subtotal'],0,'.','.')."</td>
						</tr>
					";
					}
					echo "
					<tr>
						<td colspan='3'>Total Bayar + Ongkos Kirim (10. 000)</td><td><b>".number_format($bb['total_bayar'],0,'.','.')."</b></td>
					</tr>
					<tr>
							<td colspan='4'><a href='pesanankonsumen.php'>[Back]</a></td>
						</tr>
					</table></div>";

				?>

			 </div>


		 <div class='footer' align='center'><?php include '../include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php'; ?></div>
</div>

</body>
</html>

<?php } ?>