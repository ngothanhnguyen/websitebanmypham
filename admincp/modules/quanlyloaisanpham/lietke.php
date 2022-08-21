<?php
	$sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC  ";
	$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>
<center><h2>Liệt kê loại sản phẩm</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên loại sản phẩm</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_danhmucsp)){$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
   	<td>
   		<a href="modules/quanlyloaisanpham/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xoá</a> | <a href="?action=qlloaisp&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>