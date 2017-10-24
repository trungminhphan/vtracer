<?php
require_once('header_none.php');
check_permis(!$users->is_admin());
$phanbon = new PhanBon();$csrf = new CSRF_Protect();
if(isset($_POST['submit'])){
	$csrf->verifyRequest();
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$act = isset($_POST['act']) ? $_POST['act'] : '';
	$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
	$ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : '';
	$phanbon->ten = $ten;
	$phanbon->ghichu = $ghichu;
	
	if($id && $act=='edit'){
		$phanbon->id = $id;
		if($phanbon->check_exists()){
			if($phanbon->edit_except_name()) transfers_to('phanbon.html?msg=Chỉnh sửa thành công trừ tên phân bón');
			else transfers_to('phanbon.html?msg=Không thể chỉnh sửa');
		} else {
			if($phanbon->edit()) transfers_to('phanbon.html?msg=Chỉnh sửa thành công');
			else transfers_to('phanbon.html?msg=Không thể chỉnh sửa');
		}
	} else {
		if($phanbon->check_exists()){
			transfers_to('phanbon.html?msg=Tên phân bón đã tồn tại trong CSDL');
		} else {
			if($phanbon->insert()) transfers_to('phanbon.html?msg=Thêm thành công');
			else echo 'Không thể thêm. <a href="phanbon.html">Trở về</a>';
		}
	}	
	
	
}
?>