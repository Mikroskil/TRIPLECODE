<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faux Column CSS Layouts - 2 Column - faux-1-2-col</title>
<link rel="stylesheet" type="text/css" href="css.css" />
<script type="text/javascript">
		var imgFile = ["kado1.jpg","kado2.jpg","kado3.jpg","kado4.jpg","kado5.jpg"];
		var i=0;
		var t;
			
		function startAnimasi()
		{
			var x = document.getElementById("animasi");
			x.src = imgFile[i];
			i++;
			if(i>imgFile.length-1) i=0;
			t = setTimeout("startAnimasi()",2500);
		}
		function stopAnimasi()
		{
			clearTimeout(t);
		}
		
	</script>
</head>

<body onload="startAnimasi()">

   <!-- Begin Wrapper -->
   <div id="wrapper">
   	<?php
	include ("nav.php");
	?>
         <!-- Begin Faux Columns -->
		 <div id="faux">
		 
		       <!-- Begin Left Column -->
		       <div id="leftcolumn" >
                <img src="kado.jpg"  id="animasi" onmouseover="stopAnimasi()" onmouseout="startAnimasi()" width="250" height="250">
				     
		       </div>
		       <!-- End Left Column -->
		 
		       <!-- Begin Right Column -->
		       <div id="rightcolumn">
		           <h2>HAPPY FAMLY !!</h2>
		           <br />
		           Berikan kepercayaan kepada kami untuk membantu keluarga anda. <br />
  <br />
		           Disini kami menyediakan berbagai jenis produk kado seperti cincin, boneka, jam tangan dengan berbagai bentuk desain, warna kertas dan aksesoris. kami dapat menyediakan kado sesuai selera para pengunjug semua. kami menyediakan fitur dimana para pelanggan dapat menentukan bentuk desain, isi, warna dan aksesoris.
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
