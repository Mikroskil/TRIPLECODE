<?php
$host = "localhost";
$user= "root";
$pass ="";
$db="kado";
$con=mysql_connect("$host","$user","$pass") or die ("<script>alert('Gagal Koneksi ke Server');history.go(-1);</script>");
mysql_select_db("kado") or die ("<script>alert('Gagal Koneksi ke Database');history.go(-1);</script>");
?>