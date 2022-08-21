<?php
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<center><h2>Sửa sản phẩm</h2></center>
<table border="1" width="100%"  bgcolor="#B9D2F1" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td align="center">Tên sản phẩm</td>
	  	<td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
	  </tr>
	   <tr>
	  	<td align="center">Mã sản phẩm</td>
	  	<td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
	  </tr>
	  <tr>
	  	<td align="center">Giá sản phẩm</td>
	  	<td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
	  </tr>
	  <tr>
	  	<td align="center">Số lượng</td>
	  	<td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
	  </tr>
	   <tr>
	  	<td align="center">Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	  	<td align="center">Tóm tắt</td>
	  	<td><textarea rows="10"  name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea></td>
	  </tr>
	   <tr>
	  	<td align="center">Nội dung</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"><?php echo  $row['noidung'] ?></textarea></td>
	  </tr>
	  <tr>
	    <td align="center">Loại sản phẩm</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    			if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 <tr>
	    <td align="center">Hiệu sản phẩm</td>
	    <td>
	    	<select name="hieusanpham">
	    		<?php
	    		$sql_hieusp = "SELECT * FROM tbl_hieusp ORDER BY id_hieusp DESC";
	    		$query_hieusp = mysqli_query($mysqli,$sql_hieusp);
	    		while($row_hieusp = mysqli_fetch_array($query_hieusp)){
	    			if($row_hieusp ['id_hieusp']==$row['id_hieusp']){
	    		?>
	    		<option selected value="<?php echo $row_hieusp ['id_hieusp'] ?>"><?php echo $row_hieusp ['tenhieusp'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_hieusp ['id_hieusp'] ?>"><?php echo $row_hieusp ['tenhieusp'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	  <tr>
	    <td align="center">Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Kích hoạt</option>
	    		<option value="0" selected>Ẩn</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>