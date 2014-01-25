<?php

	echo "<link rel='stylesheet' href='../my.css'  type='text/css'>";
	echo "<table class='sectbl' align='center' border='0' cellspacing='8' cellpadding='0'>";


		$con=mysql_connect('localhost','root','');
		$db=mysql_select_db('perkasa4');
		$query=mysql_query("select * from bukutamu order by tanggal desc",$con);
		while($x=mysql_fetch_array($query)){
		echo "<tr><td class='psnbtamu' ><b><a href='".$x[2]."' class='namabtamu'>".$x[1]."</a></b> :&nbsp;<span class='pesanbtamu'>  ".$x[3]." </span><br><span class='tglbtamu'>".$x[4]."</span></td></tr>";
		}



	echo "</table>";
?>