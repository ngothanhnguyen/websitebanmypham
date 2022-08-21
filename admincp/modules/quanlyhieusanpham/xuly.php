<?php
include('../../config/config.php');

$tenhieusp = $_POST['tenhieusanpham'];

if(isset($_POST['themhieusanpham'])){
	//them
	$sql_them = "INSERT INTO tbl_hieusp(tenhieusp) VALUE('".$tenhieusp."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=qlhieusp&query=them');
}elseif(isset($_POST['suahieusanpham'])){
	//sua
	$sql_update = "UPDATE tbl_hieusp SET tenhieusp='".$tenhieusp."'WHERE id_hieusp='$_GET[idhieusp]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=qlhieusp&query=them');
}else{

	$id=$_GET['idhieusp'];
	$sql_xoa = "DELETE FROM tbl_hieusp WHERE id_hieusp='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=qlhieusp&query=them');
}

?>