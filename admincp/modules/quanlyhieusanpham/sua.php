<?php
	$sql_sua_hieusp = "SELECT * FROM tbl_hieusp WHERE id_hieusp='$_GET[idhieusp]'";
	$query_sua_hieusp = mysqli_query($mysqli,$sql_sua_hieusp);
?>
<center><h2>Sửa tên sản phẩm</h2></center>
<center>
<table border="1" width="100%" bgcolor="#84B4C8" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlyhieusanpham/xuly.php?idhieusp=<?php echo $_GET['idhieusp'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_hieusp)) {
 	?>
	  <tr>
	  	<td>Tên hiệu sản phẩm</td>
	  	<td><input type="text" value="<?php echo $dong['tenhieusp'] ?>" name="tenhieusanpham"></td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suahieusanpham" value="Sửa hiệu sản phẩm"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
	</center>