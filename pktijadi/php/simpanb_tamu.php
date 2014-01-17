<?php

	include 'include/connect.php';
	$tanggal=date("Y-m-d H:i:s");
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$pesan=$_POST['pesan'];

	if($nama=='' || $email=='' || $pesan==''){
		echo"<script>alert('Field Tidak Boleh Ada Yg Kosong !!!');javascript:history.go(-1); </script>";
	}
	else{
		$input=mysql_query("insert into tb_forum values(','$nama','$email','$pesan','$tanggal')");
		if($input){
					echo "<script>window.location.href='forum1.php';</script>";
					}
					else{
					echo "<script>alert('Gagal !!!');history.go(-1);</script>";
			}

	}




?>