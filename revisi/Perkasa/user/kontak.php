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
		 								<h3>Hubungi Kami</h3>
										<p style="padding-left:80px">
										Anda dapat menghubungi kami melalui:
										<br><br>
										E-mail:&nbsp;&nbsp;
										<a href='mailto:cs.perkasa@gmail.com' style='color:blue; font-weight:bold;text-decoration:none;'>cs.perkasa@gmail.com</a><br><br>

										Alamat surat & klaim garansi:<br>

										Jl. Nibung Raya No. 138<br>
                                        Medan - 99999<br>
										Telp. 081 361 043 777<br>
										SMS: 0838 55 9999 00<br><br>
										</p>


										<h3>Atau dengan mengisi Form dibawah ini</h3>
										<form action="pro_kontak.php" method="post">
										<div class='kontak'>
										<table border="0">
										<Tr>
										<td><p>Nama</p></td><td>:</td><td><input type="text" name="nama" size="37" value="<?php echo $_SESSION['nama']; ?>" class="nm"></td>

										</tr><tr>
										<td><p>Email</p></td><td>:</td><td><input type="text" name="email" size="37" class='nm' value="<?php echo $_SESSION['email']; ?>"></td>
										</tr><tr>
										<td valign="top"><p>Pesan</p> </td><td valign="top">:</td><td><textarea class='nm' cols="50" rows="6" name="pesan"></textarea></td>
										</tr>
										<tr><td align="right" colspan="3"><input class='tombol' type="submit" value="kirim">&nbsp;&nbsp;<input type="reset" class='tombol'></td></tr>
										</table>
										</div>
										</form>

		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include'../include/footerdesc.php'; ?></div>
</div>

</body>
</html>
<?php } ?>