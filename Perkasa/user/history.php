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
		 <h3>History pembelian anda</h3>

		<div class='history'>
		 <?php

		 	include '../include/connect.php';
			$a=mysql_query("select * from cart where status=1 and id_pembeli='$_SESSION[id]'");


			echo "<table cellspacing='1' cellpadding='4' align='center'>";


				echo "

				<tr>
									<th>Tanggal</th><th>Id Faktur</th><th>Nama Produk</th><th>Jumlah</th><th>Proses</th>
				</tr>";

			while($b=mysql_fetch_array($a)){


			echo "

				<tr class='tr'>
					<td>".$b['tgl']."</td>
					<td>".$b['idfaktur']."</td>
					<td><a class='link' href='detail_produk.php?id=".$b['id_produk']."'>".$b['namaproduk']."</a></td>
					<td>".$b['jumlah']."</td>
					<td>";
					$idf=$b['idfaktur'];
					$bayar=mysql_query("select * from hitung_total_harga_cart where id_pembeli='$_SESSION[id]' and idfaktur='$idf'");
					$x=mysql_fetch_array($bayar);
					if($x['dibayar']==1){
						echo "Sudah";
					}
					else{
						echo "Belum";
					}


					echo"</td>

				</tr>";
			}
			$x=mysql_query("select * from cart where id_pembeli='$_SESSION[id]'");



			echo "</table>";

		 ?>

<br><Br>
</div>

		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
		 		 <hr style='width:50%; border:1px solid #ddd;'/>
		<div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>



</body>
</html>

<?php } ?>