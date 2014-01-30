<?php
session_start();
if(!$_SESSION['email']){
header("location:../logreg.php");
}
else{ ?>
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
					<h3>Cara Pemesanan</h3>
                    
					<ol>

					<li>Kirimkan rincian pesanan anda melalui:<br>
					- E-mail ke <a href='mailto:cs.perkasa@gmail.com?subject=Pesan Konsumen' style='color:blue; font-weight:bold;text-decoration:none;'>cs.perkasa@gmail.com</a><br>
					- <a href="kontak.php" target="_blank" style='color:blue; font-weight:bold;text-decoration:none;'>Kontak Kami</a><br>
					- Telp. 0838 55 9999 00, 081 361 043 777 (sms)<br>
					*Sertakan nama dan alamat pengiriman secara jelas dan lengkap.&nbsp;</li><br>
					<p>Setelah kami mengkonfirmasi total harga dan ongkos kirim, lakukan pembayaran melalui salah satu rekening berikut:</p>

							<table style='margin-bottom:20px'>
							<tr><td><p><b>Bank BCA</b><br>800 0578 221<br>a.n. Joni Ismail</p></td></tr>
							<tr><td><p><b>Bank Mandiri</b><br>127 001 800 9000<br>a.n. Hartawati Dermawan<br></p></td></tr>
							<tr>
							</table>

					<li>Konfirmasikan pembayaran via e-mail atau sms ke 081 361 043 777, dengan format:<br>
					<b>Nama pengirim</b> (spasi) <b>jumlah kirim</b> (spasi) <b>nama bank</b> (spasi) <b>tanggal kirim</b> (spasi) <b>jam kirim</b><br>Contoh :<br>Budi 350.000 BCA 07/05/10 10.55 </li><br>
					<li>Apabila barang telah diterima, mohon untuk segera menginformasikannya kepada kami.</li>
					</ol>
		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php'; ?></div>
		 	<hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include'../include/footerdesc.php'; ?></div>


</div>

</body>
</html>
<?php  } ?>