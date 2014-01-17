<?php
include '../include/conect.php';
date_default_timezone_set("asia/jakarta");
$email=$_POST['email'];
$pass=$_POST['password'];



if(empty($email) || empty($pass)){
echo "<script>alert('Mohon isi Email dan Password');history.go(-1);</script>";
}
else{

	$tgl=date("Y-m-d H:i:s");
																									//$passw=md5($pass);
	$q=mysql_query("select * from user  where email='$email' and password='$pass'");
	$x=mysql_fetch_array($q);
		if($x['email'] == $email and $x['password']==$pass and $x['akses']=='1'){

		session_register('email');
		session_register('password');
		$_SESSION['nama']=$x[1];
		$_SESSION['email']=$email_login;

		mysql_query("update user set lastlogin='$tgl' where akses='1'");
		header("location:../admin/index.php");
		}

		else if($x['email'] == $email and $x['password']==$pass and $x['akses']=='0'){

		session_register('email');
		session_register('password');
		$_SESSION['nama']=$x['nama'];
		$_SESSION['id']=$x['no'];
		$_SESSION['email']=$email_login;


		mysql_query("update user set lastlogin='$tgl' where email='$email'");

		header("location:../user/cart.php");

		}

		else{
		echo "<script>alert('Login Gagal !');history.go(-1);</script>";
		}
	}


?>