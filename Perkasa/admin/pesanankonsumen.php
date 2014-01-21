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
				<h3>daftar pesanan konsumen</h3>
<div class='pesanankonsumen'>


				 <?php

				 		include'../include/connect.php';

				 		$a=mysql_query("select * from hitung_total_harga_cart");
				 			echo "<table align='center'>
				 			<tr>
								<th>Tanggal</th><th>Id Pembeli</th><th>Id Faktur</th><th>Total Bayar (Rp.)</th><th>Keterangan</th>
				 			</tr>
				 			";
				 		while($aa=mysql_fetch_array($a)){
				 			echo"

				 			<tr>
				 				<td>".$aa['tgl']."</td><td><a  href='userdetail.php?id=".$aa['id_pembeli']."'>".$aa['id_pembeli']."</td><td><a href='pesanandetail.php?id=".$aa['idfaktur']."' target='_blank'>".$aa['idfaktur']."</a></td><td>".number_format($aa['total_bayar'],0,'.','.')."</td>

				 				<td>";
				 					if($aa['dibayar']==0)
				 					{echo"
				 						<a href='prosespesanan.php?id=".$aa['idfaktur']."'>Proses</a>
				 						";}
				 					else{
				 						echo "Sudah Diproses";
				 					}
				 				echo"</td>
				 				</tr>";

				 		}
				 		echo "</table>";
				 ?>


</div>
			 </div>


		 <div class='footer' align='center'><?php include '../include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include '../include/footerdesc.php'; ?></div>
</div>

</body>
</html>

<?php } ?>