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
		 	<div id='detailproduk'>
			<?php
				include '../php/include/connect.php';
				$id=$_GET['id'];
				$q="select * from tb_produk where id=$id";
				$result=mysql_query($q);
				while($x=mysql_fetch_array($result)){
				echo "<img src='../img/detailprod/".$x['gambar']."' ><p class='ketprod'>".ucfirst($x['keterangan'])."</p> ";
				

				//echo "<input type="submit" value="simpan" name="simpan">"';
				//echo "<a href='user/cart.php' class='tombolrevcart'>Tambah ke Keranjang</a><a href='user/detail_produk.php?id=".$id."' class='tombolrevcart'>Reviews</a><br><br><table><tr><td class='tempatwarn'><p class='warntocartrev'><img class='icon' src='img/warn.gif'> Untuk menggunakan fungsi keranjang/Cart dan Review anda harus login terlebih dahulu</img></p></td></tr></table> ";
				}
			?>
            				</div>
                        <div id='detailproduk1'>
			<?php
				include '../php/include/connect.php';
				$id=$_GET['id'];
				$q="select * from tb_produk where id=$id";
				$result=mysql_query($q);
				while($x=mysql_fetch_array($result)){
				echo "<input id='nmprod' class='nmprod' disabled='disabled' name='namaprod' value='".strtoupper($x['nama_produk'])."'>";
				echo "<br>";
				echo "<span class='harga'>Rp. <input value='".number_format($x['harga'],0,'.','.')."' name='hargaprod' disabled='disabled' size='5'></span>";
				echo "<br>";
				echo "<br>";
				echo "<a href='simpan_pes.php' class='beli'>BELI</a>";
				}
				?>
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


