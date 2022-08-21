<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_hieusp='$_GET[id]' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_hieusp WHERE tbl_hieusp.id_hieusp='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<td bgcolor=" #C67677"></td>
<div class="tieude">
Thương hiệu: <?php echo $row_title['tenhieusp'] ?>
	</div>
				<div class="row">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<div class="col-md-4 product-men mt-5">
						<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
							<img class="img img-responsive" width="100%" src="admincp/modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
							<p class="tensp">Tên sản phẩm : <?php echo $row['tensanpham'] ?></p>
							<p class="gia">Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
							
						</a>
					</div>
					<?php
					} 
					?>
				</div>