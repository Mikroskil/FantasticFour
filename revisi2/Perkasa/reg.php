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

	<h3>Registrasi Akun Baru</h3>

<div class='register'>
<form name="frmreg" method="post" action="proses/register.php">

	<table border='0' >
	<tr>
		<th colspan='2'>Informasi Akun</th>
	</tr>
	<tr>
		<td>Nama Depan</td><td><input required type='text' name='nama' id='namax'></td>
	</tr>
	<tr>
		<td>Nama Belakang</td><td><input required type='text' name='namaa' id='namay'></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td><td><input required type="radio" value="l" name="jk" style="
    width: 30px;
    margin-left: 0px;
    margin-right: 0px;
    margin-top: 0px;
">&nbsp;Laki&nbsp;
<input required type="radio" value="l" name="jk" style="
    width: 50px;
    margin-right: 0px;
    padding-right: 0px;
    margin-left: 0px;
    margin-top: 0px;
">&nbsp;Perempuan&nbsp;</td>
	</tr>
	<tr>
		<td>Lahir (Tgl - Bln -Thn)</td>
			<td>
			<select name='tgl'>
				<script type='text/javascript'>	for(var i=1; i<=31; i++){document.write("<option>"+i+"</option>");}</script>
			</select>
			<select name='bln'>
				<script type="text/javascript">for(var x=1; x<=12; x++){document.write("<option>"+x+"</option>")};</script>
			</select>
			<select name='thn'>
				<script type='text/javascript'>for(var j=1997; j>=1910; j--){document.write("<option>"+j+"</option>");}</script>
			</select> &nbsp;
			</td>
	</tr>
	<tr>
		<td>Email (Digunakan Sebagai Akun Login)</td><td><input required type='email' name='email' id='email' size='25'></td>
	</tr>
	<tr>
		<th colspan='2'>Password Anda</th>
	</tr>
	<tr>
		<td>Password</td><td><input required type='password' name='pass1' id='p1'></td>
	</tr>
	<tr>
		<td>Samakan</td><td><input required type='password' name='pass2' id='p2' onblur='valpass()'></td>
	</tr>
	<tr>
		<th colspan='2'>Alamat Anda</th>
	</tr>
	<tr>
		<td>provinsi</td><td><input required type='text' name='provinsi' id=provinsi></td>
	</tr>
	<tr>
		<td>Kota</td>
		<td>
				<select name='kota' id='kota'>
				<?php
					include 'include/connect.php';
					$a=mysql_query("select * from kota");
					while($b=mysql_fetch_array($a))
					{
						echo "<option>".ucwords($b['nama'])."</option>";
					}
				?>
				</select>
		</td>
	</tr>
	<tr>
		<td>Alamat Rumah</td><td><input required type='text' name='alamat' id='alamat'></td>
	</tr>
	<tr>
		<td>Kode Pos</td><td><input pattern='\d{5}' required type='text' name='pos' id='pos'></td>
	</tr>
	<tr>
		<th colspan='2'>Informasi Kontak</th>
	</tr>
	<tr>
		<td>Telp / Hp</td><td><input required type='tel' name='telp' id='telp'></td>
	</tr>
	<tr>
		<td>Fax (Boleh Dikosongkan)</td><td><input type='tel' name='fax'></td>
	</tr>
	<tr><td colspan='2'><br><Br><input type='submit' value='Daftar' class='tombol'></td></tr>

	</table>

</form>
</div>

		 </div>

		 <div class='footer' align='center'><?php include 'include/menufooter.php'; ?></div>
			 <hr style='width:50%; border:1px solid #ddd;'/>
		 <div class='copyr' align='center' ><?php include 'include/footerdesc.php'; ?></div>
</div>



</body>
</html>
