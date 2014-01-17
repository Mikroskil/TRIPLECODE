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
				<div class='tampilproduk'>

				<table width='600px' border='0' align='center'>
					<tr><th colspan='3'>Kado TERBARU</th></tr>
					<tr>

						<?php

						include ("../php/include/connect.php");

						$q="select * from tb_produk order by gambar desc limit 0,3";
						$result=mysql_query($q);
						while($x=mysql_fetch_array($result)){

						echo "<td align='center'><a href='detail_produk.php?id=".$x['id']."'><img src='../img/detailprod/".$x['gambar']."'><br>".ucwords($x['nama_produk'])."</a><br>Rp. ".number_format($x['harga'],0,'.' ,'. ')."</td>";
						}
						echo "</tr><tr>";

						$qr="select * from tb_produk order by gambar desc limit 3,3";
						$result2=mysql_query($qr);
						while($y=mysql_fetch_array($result2)){

						echo "<td align='center'><a href='detail_produk.php?id=".$y['id']."'><img src='../img/detailprod/".$y['gambar']."'><br>".ucwords($y['nama_produk'])."</a><br>Rp. ".number_format($y['harga'],0,'.' ,'. ')."</td>";
						}

						echo "</tr><tr>";

						$qr="select * from tb_produk order by gambar desc limit 6,3";
						$result2=mysql_query($qr);
						while($y=mysql_fetch_array($result2)){

						echo "<td align='center'><a href='detail_produk.php?id=".$y['id']."'><img src='../img/detailprod/".$y['gambar']."'><br>".ucwords($y['nama_produk'])."</a><br>Rp. ".number_format($y['harga'],0,'.' ,'. ')."</td>";
						}
						
						

						?>
			</tr>
				</table>
				
                    </div>
		       <!-- End Right Column -->
			   
		   <div class="clear"></div>
			   
         </div>	
            
         <!-- End Faux Columns --> 

         <!-- Begin Footer -->
         <div id="footer">
		       
    Copy Right:hhtp//KADO.com 
         </div>
		 <!-- End Footer -->
	</div>
        
   <!-- End Wrapper -->
</body>
</html>
