<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>

<div class="menu">
			<ul class="list_menu">
				
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>

				<?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">Đăng ký</a></li>
				<?php
				} 
				?>
				

				<li><a href="index.php?quanly=tintuc">Tin tức</a></li>
				<li><a href="index.php?quanly=lienhe">Liên hệ</a></li>
				
					
				
			</ul>
	<div class="timkiem">
			
				<form class="form-inline my-4 my-lg-0" action="index.php?quanly=timkiem" method="POST">
					<input type="text" class="form-control mr-sm-2" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
					<input type="submit" name="timkiem" class="btn btn-primary btn-sm" value="Tìm kiếm">
				</form>
		
	</div>
		</div> 