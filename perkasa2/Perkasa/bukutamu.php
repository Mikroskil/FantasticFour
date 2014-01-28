<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Perkasa Gaming Shop</title>

<link rel='stylesheet' href='my.css'  type="text/css">
<?php include'include/fav.php';?>
</head>



<body>

<div class='utama'>
		 <a name='atas'><div class='header'></div></a>

      		 <div class='menu' align='center'><?php include'include/menuutamaindex.php';?></div>

		 <div class='isi'>
				<h3>Buku Tamu</h3><b>
				 <br>
					<p class='warngb'>Anda bisa memberikan komentar, kritik dan saran melalui buku tamu ini<br></p></b>

				<div class='gb'>
				<table class='maintbl' cellspacing='2' cellpadding='0' border='0' align='center'>

				<tr><td  colspan='3' valign='top' align='center'><iframe src='include/btamu.php' class='ifr' align='middle'></iframe></td></tr>
				<form action='proses/inputbukutamu.php' method='post'>
				<tr><td class='ketik'>Nama</td><td>: <input type='text' name='nama' size='30' class='fbtamu' maxlength='15'></tr>
				<tr><td class='ketik'>Url/Email</span></td><td>: <input type='text' name='url' size='40' class='fbtamu' maxlength='30'></tr>
				<tr><td class='ketik'>Pesan</span></td><td>: <input type='text' name='pesan' size='60' class='fbtamu' maxlength='200'></tr>
				<tr><td colspan='2' class='tempattombol' align='right'> <input type='submit' value='Submit Pesan' class='tombol'></td></tr> </form>
				</table>
				</div>


		 </div>

		 <div class='footer' align='center'><?php include 'include/menufooter.php';?></div>
		 	<hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include 'include/footerdesc.php';?></div>
</div>



</body>
</html>
