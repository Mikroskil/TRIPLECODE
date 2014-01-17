<?php
session_start(); //memulai session
include "include/connect.php";//mengambil isian username dan password dari form//include tidak pake ../???/??
$email = $_POST['email'];
$password = $_POST['pass'];
if ($email == "" or $password == "")
{
echo "<script type='text/javascript'>"."window.alert('User name dan password masih kosong')"."</script>";
}
else{
//query untuk mengambil data user dari database sesuai dengan username inputan form
$q = "SELECT * FROM tb_user WHERE email = '$email' ";
$result = mysql_query($q);
$data = mysql_fetch_array($result);
//cek kesesuaian password masukan dengan database
if ($pass == $data['pass']) {
//menyimpan tipe user dan username dalam session
$_SESSION['email'] = $data['email'];
//header ("location:header.php");
header ("location:index.php");

}
//jika password tidak sesuai
else {
$warning = "Username / Password Salah";?>
<script type='text/javascript'>
alert("<?php echo"$warning"?>");
window.setTimeout("window.location='index.php';",2);
</script>
		<?php
}
}
?> 