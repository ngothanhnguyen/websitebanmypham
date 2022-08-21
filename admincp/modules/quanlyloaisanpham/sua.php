<?php
	$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>
<center><h2>Sửa loại sản phẩm</h2></center>
<center>
<table border="1" width="100%" bgcolor="#84B4C8" style="border-collapse: collapse;">
 <form method="POST" action="modules/quanlyloaisanpham/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
 	<?php
 	while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
 	?>
	  <tr>
	  	<td>Tên loại sản phẩm</td>
	  	<td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
	  </tr>
	  <tr>
	    <td>Thứ tự</td>
	    <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suadanhmuc" value="Sửa loại sản phẩm"></td>
	  </tr>
	  <?php
	  } 
	  ?>

 </form>
</table>
	</center>