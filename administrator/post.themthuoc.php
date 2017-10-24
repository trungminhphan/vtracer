<?php
require_once('header_none.php');
check_permis(!$users->is_admin());
$thuoc = new Thuoc();
if(isset($_POST['submit'])){
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$act = isset($_POST['act']) ? $_POST['act'] : '';
	$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
	$thoigiancachly = isset($_POST['thoigiancachly']) ? $_POST['thoigiancachly'] : 0;
	$ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : '';
	$thuoc->ten = $ten;
	$thuoc->thoigiancachly = $thoigiancachly;
	$thuoc->ghichu = $ghichu;
	
	if($id && $act=='edit'){
		$thuoc->id = $id;
		if($thuoc->check_exists()){
			if($thuoc->edit_except_name()) transfers_to('thuoc.html?msg=Chỉnh sửa thành công trừ tên thuốc');
			else transfers_to('thuoc.html?msg=Không thể chỉnh sửa');
		} else {
			if($thuoc->edit()) transfers_to('thuoc.html?msg=Chỉnh sửa thành công');
			else transfers_to('thuoc.html?msg=Không thể chỉnh sửa');
		}
	} else {
		if($thuoc->check_exists()){
			transfers_to('thuoc.html?msg=Tên Thuốc đã tồn tại trong CSDL');
		} else {
			if($thuoc->insert()) transfers_to('thuoc.html?msg=Thêm thành công');
			else echo 'Không thể thêm. <a href="thuoc.html">Trở về</a>';
		}
	}	
	
	
}
?>