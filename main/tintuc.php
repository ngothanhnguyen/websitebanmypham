<style type="text/css">
	.tieudedk{
	width:auto;
	height:60px;
	background:#C67677;
	font-size:25px;
	text-align:center;
	padding:5px;
	color:#fff;
	line-height:40px;
}
	table.dangky tr td {
	    padding: 5px;
	}
</style>
<table width="100%">
				
				<tr class="tieudedk" >
					<td >
						<h3 >Danh mục bài viết</h3>
					</td>
				</tr>
					<tr>
						<td>
						<ul class="listsidebar">
					<?php
	
						$sql_danhmuc_bv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
						$query_danhmuc_bv = mysqli_query($mysqli,$sql_danhmuc_bv);
						while($row = mysqli_fetch_array($query_danhmuc_bv)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucbaiviet&id=<?php echo $row['id_baiviet']?>"><?php echo $row['tendanhmuc_baiviet'] ?></a></li>
					<?php
					} 
					?>
				</ul>
					</td>
				</tr>
				
				
				
				
				
				
				
	</table>