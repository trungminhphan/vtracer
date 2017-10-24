<?php
require_once('header_none.php');
$diachi = new DiaChi();

if(isset($_POST['submit'])){
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$id_root = isset($_POST['id_root']) ? $_POST['id_root'] : '';
	$act = isset($_POST['act']) ? $_POST['act'] : '';

	$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
	$id_parent = isset($_POST['id_parent']) ? $_POST['id_parent'] : '';
	$ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : '';

	$diachi->ten = $ten;
	$diachi->id_parent = $id_parent;
	$diachi->ghichu = $ghichu;

	if($diachi->check_exists()){
		transfers_to('diachi.html?msg=Địa chỉ đã tồn tại trong CSDL');
	} else {
		if($id && $act=='edit'){
			$diachi->id = $id;
			if($diachi->edit()) transfers_to('diachi.html?id='.$id_parent.'&id_root='.$id_root.'&msg=Chỉnh sửa thành công');
			else transfers_to('diachi.html?id='.$id_parent.'&id_root='.$id_root.'&msg=Không thể chỉnh sửa');
		} else {
			if($diachi->insert()) transfers_to('diachi.html?id=' . $id_parent .'&id_root='.$id_root);
			else echo 'Không thể thêm. <a href="diachi.html?id='.$id_parent.'&id_root='.$id_root.'">Trở về</a>';
		}	
	}
	
}
?>