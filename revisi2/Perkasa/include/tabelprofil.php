<?php
											include'../include/connect.php';

										$email=$_SESSION['email'];
										$q=mysql_query("select * from user where email='$email'",$con);
										$x=mysql_fetch_array($q);
										echo "
										<tr><td width='100'>Nama</td><td>".$x[1]."<input type='hidden' name='id' value='".$x[0]."'></td></tr>
										<tr><td>Email</td><td>".$x[4]."</td></tr>
										<tr><td>Password</td><td>".$x[2]."</td></tr>
										<tr><td>Telp</td><td>".$x[5]."</td></tr>
										<tr><td>Alamat</td><td>".$x[3]."</td></tr>
										<tr><td>J. Kelamin</td><td>";
										if($x[3]==1){
											echo"Perempuan";
											}
											else{
											echo"Pria";
											}; echo"</td></tr>
											<tr><td>Lahir</td><td>".$x['lahir']."</td></tr>
											<tr><td>Provinsi</td><td>".$x['provinsi']."</td></tr>
											<tr><td>Kota</td><td>".$x['kota']."</td></tr>
											<tr><td>Kode Pos</td><td>".$x['pos']."</td></tr>
											<tr><td>Fax</td><td>".$x['fax']."</td></tr>
										<tr><td colspan='2' align='right' height='35px' valign='top'><a class='tmbledit' href='formeditprofil2.php?id=".$x[0]."'>Edit</a></td></tr>
										";
									?>