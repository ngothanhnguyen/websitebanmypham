<div class="clear"></div>
<div class="main">
<?php
				if(isset($_GET['action']) && $_GET['query']){
					$tam=$_GET['action'];
					$query = $_GET['query'];
				}else {
					$tam='';
					$query = '';
				} 
				if($tam=='qlloaisp' && $query=='them'){
					include("modules/quanlyloaisanpham/them.php");
					include("modules/quanlyloaisanpham/lietke.php");
					
				}elseif ($tam=='qlloaisp' && $query=='sua') {
					include("modules/quanlyloaisanpham/sua.php");
					
				}elseif($tam=='qlhieusp'&& $query=='them'){
					include("modules/quanlyhieusanpham/them.php");
					include("modules/quanlyhieusanpham/lietke.php");
					
				}elseif ($tam=='qlhieusp' && $query=='sua') {
					include("modules/quanlyhieusanpham/sua.php");
					
				}elseif($tam=='qlsp'&& $query=='them'){
					include("modules/quanlysanpham/them.php");
					include("modules/quanlysanpham/lietke.php");
				}elseif($tam=='qlsp' && $query=='sua'){
					include("modules/quanlysanpham/sua.php");
				}elseif($tam=='quanlydonhang' && $query=='lietke'){
					include("modules/quanlydonhang/lietke.php");

				}elseif($tam=='donhang' && $query=='xemdonhang'){
					include("modules/quanlydonhang/xemdonhang.php");
				}elseif($tam=='quanlydanhmucbaiviet' && $query=='them'){
					include("modules/quanlydanhmucbaiviet/them.php");
					include("modules/quanlydanhmucbaiviet/lietke.php");

				}elseif($tam=='quanlydanhmucbaiviet' && $query=='sua'){
					include("modules/quanlydanhmucbaiviet/sua.php");

				}elseif($tam=='quanlybaiviet' && $query=='them'){
					include("modules/quanlybaiviet/them.php");
					include("modules/quanlybaiviet/lietke.php");
					
				}elseif($tam=='quanlybaiviet' && $query=='sua'){
					include("modules/quanlybaiviet/sua.php");	
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");
				}elseif($tam=='dktv'){
					include("main/danhkithanhvien.php");
				}else{
					include("modules/welcome.php");
				}
			
		?>
</div>