<?php
$user_name=$_POST['user'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jk'];
$email=$_POST['email'];
$password=$_POST['pass'];
$con = mysql_connect ("localhost","root","");
mysql_select_db("dbkado",$con);
$sql="insert into tb_user VALUES('$user_name','$alamat','$jenis_kelamin','$email','$password')";
$bar = mysql_query($sql,$con);
if(!$bar) {
	?>
	
		<script type='text/javascript'>
		alert("Daftar Gagal Tersimpan");
		window.setTimeout("window.location='register.php';",2);
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