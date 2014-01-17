				<?php
echo "<link rel='stylesheet' href='../my.css'  type='text/css'>";
				echo "<table align='center' border='0' cellspacing='8' cellpadding='0'>";

							$con=mysql_connect('localhost','root','');
							$db=mysql_select_db('dbkado');
							$query=mysql_query("select * from tb_forum order by tanggal desc",$con);
							while($x=mysql_fetch_array($query)){
							echo "<tr><td class='psnbtamu' >".$x['nama']."&nbsp;".$x['email']." :&nbsp;<span class='pesanbtamu'>  ".$x['pesan']." </span><br><span class='tglbtamu'>".$x['tanggal']."</span></td></tr>";
							}



		echo "</table>";
								?>