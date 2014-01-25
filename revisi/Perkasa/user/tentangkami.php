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
<link rel='stylesheet' href='../my.css'  type="text/css"></head>
<?php include'../include/fav.php';?>

</head>


<body>

<div class='utama'>
		 <a name='atas'><div class='header'></div></a>

      		 <div class='menu' align='center'><?php include'../include/menuutamauser.php'; ?></div>

		 <div class='isi'>
		 								 <h3>Tentang Kami</h3>
										 <p><a href='index.php' style='text-decoration:none;font-weight:bold;color:orange;'>Perkasa Gaming Shop</a> Sentiment couraient les ses adjudants construit chaclosah cotillons. Ete caracolent feu patiemment mendiaient par. Eclatantes si mendiaient ecouterent du ordonnance fanatiques consentiez. Eu au alternent rapportes ce troupeaux. Boulevard nez jeu sinistres ame apprendre. Vie ouvert six bottes fronts police polies. Rangs votre peu peu car ils point sabre rente.
										 </p>

										 <p>Vert sous net doit roc ont tete vie vlan. Crispent profonde des rit contient dit doctrine donnerai. Lorgnez ras prefere falloir ere une effraie. Ere ame sol peu peints postes titres. Concierge puissions mes par evocation est rappelles construit. Bruits paumes une mouche non fer vit disant. Enfantent epaissies meconnais attachent battirent dissipait but fit.  </p>
										 <p><b>
										 Alamat surat / klaim garansi:<br>
										 Jl. Nibung Raya No. 138<br>
										 Medan - 99999<br>
										 Telp. 081 361 043 777<br>
										 SMS: 0838 55 9999 00<br>
										 <br>
										 E-mail:
										 admin@perkasa.com</b><br></p>
		 </div>

		 <div class='footer' align='center'><?php include'../include/menufooter.php';?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include'../include/footerdesc.php';?></div>

</div>


</body>
</html>
<?php }  ?>