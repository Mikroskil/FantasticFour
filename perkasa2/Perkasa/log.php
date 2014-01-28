<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
<title>Perkasa Gaming Shop</title>
<link rel='stylesheet' href='my.css'  type="text/css">
<?php include'include/fav.php';?>
<script type='text/javascript' src='valreg.js'>
</script>
<script>

var c = document.frmreg.nama.value;


function valpass(){

var a=document.getElementById('p1').value;
var b=document.getElementById('p2').value;
if(a!=b){
alert("Password anda tidak sama");
document.getElementById('p1').value="";
document.getElementById('p2').value="";
document.getElementById('p1').focus();
}
else{
document.getElementById('provinsi').focus();
}


}
</script>
</head>

<body>

<div class='utama'>
		<a name='atas'><div class='header'></div></a>
      		 <div class='menu' align='center'><?php include'include/menuutamaindex.php';?></div>
<div class='isi'>
	<h3>Log In</h3><br>
	<div class='login'>
		<form action='proses/login.php' method='post'>
			<table>
				<tr><td width='100'>Email</td><td>: <input required type='email' size='30' name='email'></td></tr>
				<tr><td>Password</td><td>: <input required type='password' size='30' name='password'></td></tr>
				<tr><td colspan='2' align='right'><input type='submit' value='Login' class='tombol'></td></tr>
			</table>
		</form>
	</div>
<br>
	
</div>

		 <div class='footer' align='center'><?php include 'include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include 'include/footerdesc.php'; ?></div>
</div>



</body>
</html>
