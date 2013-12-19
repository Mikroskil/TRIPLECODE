<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faux Column CSS Layouts - 2 Column - faux-1-2-col</title>
<link rel="stylesheet" type="text/css" href="css.css" />

</head>

<body>

   <!-- Begin Wrapper -->
   <div id="wrapper">
   	<?php
	include ("nav.php");
	?>
         <!-- Begin Faux Columns -->
		 <div id="faux">

		 
		       <!-- Begin Left Column -->
		       <div id="leftcolumn" >
                            <table border="1" align="center">
             <tr>
             <td colspan="3"><h2 align="center">Silahkan pilih kado yang anda sukai</h2></td>
             </tr>
             <tr>
             <td><img src="gambar/kado2.jpg" /></td> <td><img src="gambar/kado5.jpg" /></td> <td><img src="gambar/kado8.jpg" /></td>
             </tr>
   			 </table>
                				     
		       </div>
		       <!-- End Left Column -->
		 
		       <!-- Begin Right Column -->
		       <div id="rightcolumn">

		       
		       
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
