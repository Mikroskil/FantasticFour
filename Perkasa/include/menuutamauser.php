<?php

include 'connect.php';

$a=mysql_query("select * from cart where id_pembeli='$_SESSION[id]' and status=0",$con);
$b=mysql_num_rows($a);
if($b!=0){

echo "

<ul class='dropmenu'>
						<li><a href='cart.php'>Cart (".$b.")</a></li>
      					<li><a href='produk.php'>Produk</a>
						<ul>
							<li><a href='produk.php'>&nbsp;Mouse Gaming&nbsp;</a></li>
							<li><a href='produk.php'>&nbsp;Keyboard Gaming &nbsp;</a></li>
							<li><a href='produk.php'>&nbsp;Headset &nbsp;</a></li>
						</ul>
						</li>
						<li><a href='index.php'>Akun</a></li>
      					<li><a href='kontak.php'>Kontak</a></li>
      					<li><a href='tentangkami.php'>Tentang Kami</a></li>

						<li><a href='carapesan.php'>Cara Pesan</a></li>
						<li><a href='bukutamu.php'>Buku Tamu</a></li>
						<li><a href='../proses/logout.php'>Log Out</a></li>
						<ul>
";
}


else{

echo "


			
			<ul class='dropmenu' align='center'>
						<li><a href='cart.php'>Cart (".$b.")</a></li>
      					<li><a href='produk.php'>Produk</a>
						<ul>
							<li><a href='produk.php'>&nbsp;Mouse Gaming&nbsp;</a></li>
							<li><a href='produk.php'>&nbsp;Keyboard Gaming &nbsp;</a></li>
							<li><a href='produk.php'>&nbsp;Headset &nbsp;</a></li>
						</ul>
						</li>
						<li><a href='index.php'>Akun</a></li>
      					<li><a href='kontak.php'>Kontak</a></li>
      					<li><a href='tentangkami.php'>Tentang Kami</a></li>

						<li><a href='carapesan.php'>Cara Pesan</a></li>
						<li><a href='bukutamu.php'>Buku Tamu</a></li>
						<li><a href='../proses/logout.php'>Log Out</a></li>
						<ul>
			
";}



?>