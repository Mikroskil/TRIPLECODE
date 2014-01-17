<?php
$user_name=$_POST['user'];
$alamat=$_POST['alamat'];
$alamat_tujuan=$_POST['alut'];
$tanggal=$_POST['tgl'];
$con = mysql_connect ("localhost","root","");
mysql_select_db("dbkado",$con);
$sql="insert into td_pemesan VALUES('$user_name','$alamat','$alamat_tujuan','$tanggal')";
$bar = mysql_query($sql,$con);
if(!$bar) {
	?>
	
		<script type='text/javascript'>
		alert("Daftar Gagal Tersimpan");
		window.setTimeout("window.location='DesainKado.php';",2);
		</script>
		<?php
		}
		else {
		?>
		<script type='text/javascript'>
		alert("Daftar Berhasil Tersimpan");
		window.setTimeout("window.location='index.php';",2);
		</script>
		<?php
		}
		?>