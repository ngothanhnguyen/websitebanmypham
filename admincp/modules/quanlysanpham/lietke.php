<?php
	$sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc,tbl_hieusp WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc and tbl_sanpham.id_hieusp=tbl_hieusp.id_hieusp ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<center><h2>Liệt kê sản phẩm</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Loại</th>
	<th>Hiệu</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
	<td><?php echo $row['tenhieusp'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Kích hoạt';
      }else{
        echo 'Ẩn';
      } 
      ?>
      
    </td>
   	<td>
   		<a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> | <a href="?action=qlsp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>