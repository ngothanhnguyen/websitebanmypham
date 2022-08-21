<center><h2>Thêm sản phẩm</h2></center>

<table border="1" width="100%" bgcolor="#B9D2F1"  style="border-collapse: collapse;" align="center">
 <form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
	  <tr>
	  	<td align="center">Tên sản phẩm</td>
	  	<td><input type="text" name="tensanpham"></td>
	  </tr>
	   <tr>
	  	<td align="center">Mã sản phẩm</td>
	  	<td><input type="text" name="masp"></td>
	  </tr>
	  <tr>
	  	<td align="center">Giá sản phẩm</td>
	  	<td><input type="text" name="giasp"></td>
	  </tr>
	  <tr>
	  	<td align="center">Số lượng</td>
	  	<td><input type="text" name="soluong"></td>
	  </tr>
	   <tr>
	  	<td align="center">Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>
	  </tr>
	  <tr>
	  	<td align="center">Tóm tắt</td>
	  	<td><textarea rows="10"  name="tomtat" style="resize: none"></textarea></td>
	  </tr>
	   <tr>
	  	<td align="center">Nội dung</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"></textarea></td>
	  </tr>
	  <tr>
	    <td align="center">Loại sản phẩm</td>
	    <td>
	    	<select name="danhmuc">
	    		<?php
	    		$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
	    		<?php
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
	    		?>
	    		<option value="<?php echo $row_hieusp['id_hieusp'] ?>"><?php echo $row_hieusp['tenhieusp'] ?></option>
	    		<?php
	    		} 
	    		?>
	    	</select>
	    </td>
	  </tr>
	 
	  <tr>
	    <td align="center">Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ẩn</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2" align="center"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
	  </tr>
 </form>
</table>
<br>