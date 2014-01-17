<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faux Column CSS Layouts - 2 Column - faux-1-2-col</title>
<link rel="stylesheet" type="text/css" href="css.css" />
<script type='text/javascript' src='valreg.js'></script>
<script>

var c = document.frmreg.nama.value;


function xxg(){

alert(c);

}</script>
</head>

<body >

   <!-- Begin Wrapper -->
   <div id="wrapper">
   
        <?php
	include ("include/nav.php");
	?>
         <!-- Begin Faux Columns -->
		 <div id="faux">

		 
		       <!-- Begin Left Column -->
		       <div id="leftcolumn" >

		       </div>
		       <!-- End Left Column -->
		 
		       <!-- Begin Right Column -->
		       <div id="rightcolumn">
               <form name="frmreg" method="post" action="simpanregister.php">
               <table border='0'>
	<tr>
		<th colspan='2' valign="middle" align="left">Informasi Akun</th>
	</tr>
	<tr>
		<td>Nama Depan</td><td><input type='text' name='nama' id='namax'></td>
	</tr>
	<tr>
		<td>Nama Belakang</td><td><input type='text' name='namaa' id='namay'></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td><td><input type='radio' value='l' name='jk' checked>&nbsp;&nbsp;Laki&nbsp;<input type='radio' value='l' name='jk'>&nbsp;Perempuan&nbsp;&nbsp;</td>
	</tr>
	<tr>
		<td>Lahir</td>
			<td>
			<select name='tgl'>
				<option selected='selected'>Tgl</option><script type='text/javascript'>	for(var i=1; i<=31; i++){document.write("<option>"+i+"</option>");}</script>
			</select>
			<select name='bln'>
				<option selected='selected'>Bln</option><script>for(var x=1; x<=12; x++){document.write("<option>"+x+"</option>")};</script>
			</select>
			<select name='thn'>
				<option selected='selected'>Thn</option><script type='text/javascript'>for(var j=1997; j>=1910; j--){document.write("<option>"+j+"</option>");}</script>
			</select>
			</td>
	</tr>
	<tr>
		<td>Email (Digunakan Sebagai Akun Login)</td><td><input type='text' name='email' id='email' size='25'></td>
	</tr>
	<tr>
		<th colspan='2' align="left">Password Anda</th>
	</tr>
	<tr>
		<td>Password</td><td><input type='password' name='pass1' id='p1'></td>
	</tr>
	<tr>
		<td>Samakan</td><td><input type='password' name='pass2' id='p2'></td>
	</tr>
	<tr>
		<th colspan='2' align="left">Alamat Anda</th>
	</tr>
	<tr>
		<td>provinsi</td><td><input type='text' name='provinsi' id=provinsi></td>
	</tr>
	<tr>
		<td>Kota</td><td><input type='text' name='kota' id='kota'></td>
	</tr>
	<tr>
		<td>Alamat Rumah</td><td><input type='text' name='alamat' id='alamat'></td>
	</tr>
	<tr>
		<td>Kode Pos</td><td><input type='text' name='pos' id='pos'></td>
	</tr>
	<tr>
		<th colspan='2' align="left">Informasi Kontak</th>
	</tr>
	<tr>
		<td>Telp / Hp</td><td><input type='text' name='telp' id='telp'></td>
	</tr>
	<tr>
		<td>Fax (Boleh Dikosongkan)</td><td><input type='text' name='fax'></td>
	</tr>
	<tr><td colspan='2'><br><Br><input type='submit' value='Daftar' class='tombol'><input type='button' onclick='xxg()' value='Clear'></td></tr>

	</table></form>

		       
		       
			   <div class="clear"></div>
			   
		       </div>
		       <!-- End Right Column -->
			   
			   <div class="clear"></div>
			   
         </div>	   
         <!-- End Faux Columns --> 

         <!-- Begin Footer -->
         <div id="footer">
		       
               This is the Footer		

         </div>
		 <!-- End Footer -->
	</div>
        
   <!-- End Wrapper -->
</body>
</html>
               
               
