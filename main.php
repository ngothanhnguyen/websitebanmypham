<div class="main">
						<?php
			include("sidebar.php")
		?>
					
					<div class="maincontent">
						<?php
				if(isset($_GET['quanly'])){
					$tam=$_GET['quanly'];
				}else {
					$tam='';
				} 
				if($tam=='danhmucsanpham'){
					include("main/danhmuc.php");
				}elseif($tam=='chamsocdats'){
					include("main/danhmuctonerserum.php");
				}elseif($tam=='sanpham'){
					include("main/sanpham.php");
				}elseif($tam=='hieusanpham'){
					include("main/hieusp.php");
				}
					elseif($tam=='giohang'){
					include("main/giohang.php");
				}
					elseif($tam=='thanhtoan'){
					include("main/thanhtoan.php");
				}elseif($tam=='camon'){
					include("main/camon.php");		
				}elseif($tam=='lienhe'){
					include("main/lienhe.php");
				}elseif($tam=='dangky'){
					include("main/dangky.php");
				}elseif($tam=='dangnhap'){
					include("main/dangnhap.php");
				}elseif($tam=='timkiem'){
					include("main/timkiem.php");
				}elseif($tam=='vanchuyen'){
					include("main/vanchuyen.php");
				
				}elseif($tam=='danhmucbaiviet'){
					include("main/danhmucbaiviet.php");
				}elseif($tam=='baiviet'){
					include("main/baiviet.php");
				}
				elseif($tam=='thongtinthanhtoan'){
				include("main/thongtinthanhtoan.php");
				}
	
				elseif($tam=='donhangdadat'){
					include("main/lichsudonhang.php");
				}elseif($tam=='thaydoimatkhau'){
					include("main/thaydoimatkhau.php");
				}elseif($tam=='lichsudonhang'){
					include("main/lichsudonhang.php");
				}elseif($tam=='xemdonhang'){
					include("main/xemdonhang.php");
				}elseif($tam=='tintuc'){
					include("main/tintuc.php");
				}
				else{
					include("main/index.php");
				}
			
		?>
	</div>
	
	
</div>