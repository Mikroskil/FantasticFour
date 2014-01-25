<html><head>



<title>Update Data</title></head>
<body onload="go()">

<h3>Update Data</h3>
<p>Silahkan isi data yang akan diubah</p>

<table summary="border='1'">
<tr>
<td></td>
</tr>
</table>>
<tr><th>Nama</th><th>Password</th></tr>
<?php
include '../include/connect.php';
$nama=$_GET['nama'];
$pass=$_GET['password']
$query=mysql_query("select * from user",$con);
$x=mysql_fetch_array($query){
echo "<tr><input type='text' value='".$x[1]."'><td></td><td></td></tr>";
}
?>
</table>
</body>
</html>