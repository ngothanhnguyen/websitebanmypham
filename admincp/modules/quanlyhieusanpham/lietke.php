<?php
	$sql_lietke_hieusp = "SELECT * FROM tbl_hieusp  ";
	$query_lietke_hieusp = mysqli_query($mysqli,$sql_lietke_hieusp);
?>
<center><h2>Liệt kê hiệu sản phẩm</h2></center>

<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên hiệu sản phẩm</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_hieusp)){$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenhieusp'] ?></td>
   	<td>
   		<a href="modules/quanlyhieusanpham/xuly.php?idhieusp=<?php echo $row['id_hieusp'] ?>">Xoá</a> | <a href="?action=qlhieusp&query=sua&idhieusp=<?php echo $row['id_hieusp'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>