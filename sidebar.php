<div class="sidebar">
			<table width="100%">
				<tr class="tieude" >
					<td >
						<h3>Loại sản phẩm</h3>
					</td>
				</tr>
					<tr>
						<td>
						<ul class="listsidebar">
				
					<?php
	
						$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
						$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
						while($row = mysqli_fetch_array($query_danhmuc)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
					<?php

					} 
					?>
						</ul>
					</td>
				</tr>
				
				
				
				<tr class="tieude" >
					<td >
						<h3>Thương hiệu </h3>
					</td>
				</tr>
					<tr>
						<td>
						<ul class="listsidebar">
				
					<?php
	
						$sql_hieusp = "SELECT * FROM tbl_hieusp ORDER BY id_hieusp DESC";
						$query_hieusp = mysqli_query($mysqli,$sql_hieusp);
						while($row = mysqli_fetch_array($query_hieusp)){
						    		
					?>
					<li style="text-transform: uppercase;"><a href="index.php?quanly=hieusanpham&id=<?php echo $row['id_hieusp'] ?>"><?php echo $row['tenhieusp'] ?></a></li>
					<?php

					} 
					?>
						</ul>
					</td>
				</tr>
				
				
				
				
				
				
				
				
				
	</table>
           
    	
			
		
				
            	
</div>



			
				
