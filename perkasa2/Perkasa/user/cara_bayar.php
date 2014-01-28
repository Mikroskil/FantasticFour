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
<script type='text/javascript'>



function hide(){

	document.getElementById('ra').style.color='red';
	document.getElementById('c').style.display='none';
}
function a(){
	document.getElementById('a').style.display='block';
	document.getElementById('ra').style.color='red';
	document.getElementById('rc').style.color='#555';

	document.getElementById('c').style.display='none';
}
function b(){
	document.getElementById('ra').style.color='#555';
	document.getElementById('rc').style.color='#555';
	document.getElementById('a').style.display='none';
	document.getElementById('c').style.display='none';
}
function c(){
	document.getElementById('ra').style.color='#555';
	document.getElementById('rc').style.color='red';
	document.getElementById('a').style.display='none';
	document.getElementById('c').style.display='block';
}

</script>

</head>


<body onload='hide(),a()'>

		<?php
			 include '../include/connect.php';

			 $ambilidf=mysql_query("select * from cart where id_pembeli='$_SESSION[id]' and status=0");
			 $seleketep=mysql_fetch_array($ambilidf);
   			 $idf=$seleketep['idfaktur'];


 				$user=mysql_query("select * from user where no='$_SESSION[id]'");
	     		$userr=mysql_fetch_array($user);
				$kotaku=$userr['kota'];
				echo "<script>alert('".$kotaku."');</script>";


			 	$pilihkota=mysql_query("select tarif from kota where nama='$kotaku'");
				$pilihkotaa=mysql_fetch_array($pilihkota);


			 $b=mysql_query("select * from hitung_total_harga_cart where id_pembeli='$_SESSION[id]' and idfaktur='$idf'");
			 $y=mysql_fetch_array($b);
			 $ttll=$y[2]+$pilihkotaa['tarif'];



		 ?>

<div class='utama'>

	<a name='atas'><div class='header'></div></a>

      	<div class='menu' align='center'><?php include'../include/menuutamauser.php'; ?></div>

			 <div class='isi'>

 					<H3>Cara pembayaran</h3>


						<div class='bayar'>

							 <h4>Silahkan Pilih Cara Pembayaran Pembelian Anda</h4>


<!-- ================RADIO FORM =============== -->



 <form action='pro_carabayar.php?n=<?php echo $y[0]; ?>&ttl=<?php echo $ttll; ?>&idf=<?php echo $idf; ?>' method='post'>
 <div class='frmradio'>
 <input type='hidden' name='id' value='<?php echo $y[1]; ?>'>
 <table border='0'  width='100%'>
 <tr>
 <td>
 <label onclick='a()'  id='ra'><input type='radio' checked name='cp' value='2'>Transefer Via Rekening</label>

 </td>
 </tr>
 <tr>
 <td>
	 <div id='a' class='desc'>
		Silahkan transfer sejumlah dari total produk yang anda pesan ke Nomor Rekening ini 3943242304 <br> Total yang harus anda setor bisa anda lihat pada tabel yang ada dibawah.<br>Setelah kami menerima transfer dari anda maka kami akan menghubungi anda untuk info lebih lanjut<br> Terima kasih.
	 </div>
</td>
</tr>

<tr>
<td>
 <label onclick='c()' id='rc'><input type='radio' name='cp' value='3'>Paypal</label>
 </td>
 </tr>
 <tr>
 <td>
	 <div id='c' class='desc'>
	 Silahkan transfer sejumlah dari total produk yang anda pesan ke Nomor Rekening ini 3943242304 <br> Total yang harus anda setor bisa anda lihat pada tabel yang ada dibawah.<br>Setelah kami menerima transfer dari anda maka kami akan menghubungi anda untuk info lebih lanjut<br> Terima kasih.
	 </div>
</td>
</tr>

 <tr>
 <td>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' class='tombol' value='Lanjut'>
 </td>
 </tr>
 </table>
 </table>
 </div>
 </form>
<p class='nb'>*Untuk proses yang lebih cepat, silahkan konfirmasi pembayaran anda dengan mengirimkan <br><u>nomor pembelian</u> anda melalui sms atau telepon ke nomor yang tertera dibawah ini  </p>


 <!-- ================END RADIO FORM =============== -->


							<div class='to'>
							<table>
							<tr><td>No. Pembelian </td><td>: <?php echo $y[0]; ?></td></tr>
							<tr><td>Kirim Ke</td><td>: 087869872067</td></tr>
							</table>
							</div>
							<br><br>




						</div>







			 	</div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
		 		 <hr style='width:50%; border:1px solid #ddd;'>
		<div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>
</div>



</body>
</html>

<?php } ?>
