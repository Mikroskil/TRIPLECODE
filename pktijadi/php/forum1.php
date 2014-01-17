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
		 <div id="faux">
		 
		       <!-- Begin Left Column -->
<div id="buku_tamu">
				<h3>Buku Tamu</h3><b>
				 <br>
					<p class='warngb'>Anda bisa memberikan komentar, kritik dan saran melalui buku tamu ini
									Demi kenyamanan kita bersama diminta agar jangan melakukan
					Junk, Flood, SARA, Spam dan tindak tidak menyenangkan lainya</p></b>
                    </div>

				<div id='buku_tamu1'>
				<table cellspacing='2' cellpadding='0' border='0'>

				<tr><td valign='top' colspan="2"><iframe height="300px" src="btamu.php"></iframe></td></tr>
                <tr><td></td></tr>
                <form action='simpanb_tamu.php' method='post'>
   				<tr><td>Nama</td><td><input type='text' name='nama' size="30" /></td></tr>
				<tr><td>Email</td><td><input type='text' name='email' size="30" /></td></tr>
				<tr><td>Pesan</td><td><input type='text' name='pesan' size="50" /></td></tr>
 				 <tr>
                <td colspan="2"  height="40"><input type="submit" value="submit" name="submit" /></td>
                 </tr>
                
                 </form>
				</table>
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


