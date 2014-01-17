<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faux Column CSS Layouts - 2 Column - faux-1-2-col</title>
<link rel="stylesheet" type="text/css" href="../css/css.css" />
</head>
<body>

   <!-- Begin Wrapper -->
   <div id="wrapper">
<?php

include ("../php/include/nav.php");
?>
         <!-- Begin Faux Columns -->
		 <div id="fauxregister">
		 
		       <!-- Begin Left Column -->
				<div id='register'>
<table>
				<form method="post" action="simpan_register.php" name="form">
                 <tr>
                <td colspan="2" bgcolor="#CCCCCC" height="40"><h2>Input Data pribadi Anda</h2></td>
                 </tr>
                               
                <tr>
                <td height="40">Nama</td><td><input type="text" placeholder="Nama" id="user" name="user" /></td>
                </tr>
               
                <tr>
                <td height="40">Alamat</td><td><input type="text" placeholder="Alamat " id="alamat" name="alamat" /></td>
                </tr>
                
                <tr>
                <td height="40">Jenis_kelamin</td><td><input type="radio" value="Laki-Laki" name="jk"/>Laki-Laki &nbsp;<input type="radio" name="jk" value="Perempuan"/>Perempuan</td>
                </tr>
                
                 <tr>
                <td height="40">Email</td><td><input type="text" placeholder="Email" id="email" name="email" /></td>
                </tr>
                
                                <tr>
                <td height="40">Password</td><td><input type="password" placeholder="password" id="pass" name="pass" /></td>
                </tr>
                
                                                <tr>
                <td height="40">Tanggal</td><td><input type="date" placeholder="Tanggal" id="tgl" name="tgl" /></td>
                </tr>
                
                                                <tr>
                <td height="40">Alamat Tujuan</td><td><input type="text" placeholder="Alamat Tujuan" id="alut" name="alut" /></td>
                </tr>
  <tr>
                <td colspan="2"  height="40"><input type="submit" value="Daftar" id="daftar" name="daftar" /></td>
                               </tr>
                
                </form>
                </table>
                </div>
		       <!-- End Right Column -->
			   
		   <div class="clear"></div>
			   
         </div>	
            
         <!-- End Faux Columns --> 

         <!-- Begin Footer -->

		 <!-- End Footer -->
	</div>
        
   <!-- End Wrapper -->
</body>
</html>
