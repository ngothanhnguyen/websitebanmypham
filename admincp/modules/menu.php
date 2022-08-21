<div class="menu">
    	<ul>
			
        	<li><a href="index.php?action=qlloaisp&query=them">Quản lý loại SP</a></li>
            <li><a href="index.php?action=qlhieusp&query=them">Quản lý hiệu SP</a></li>
            <li><a href="index.php?action=qlsp&query=them">Quản lý sản phẩm</a></li>
           <li><a href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý DMBV</a></li>
	        <li><a href="index.php?action=quanlybaiviet&query=them">Quản lý bài viết</a></li>
            <li><a href="index.php?action=quanlydonhang&query=lietke">Quản lý đơn hàng</a></li>
			<li><a href="index.php"  style="background:#000;color:#fff;width:200px;height:40px;">Thống kê</a></li>
		<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangnhap']);
		header('Location:login.php');
	}
?>
<li><a href="index.php?dangxuat=1" style="background:#000;color:#fff;width:200px;height:40px;" >Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];

	} ?></a></li>

        </ul>
       
    </div>