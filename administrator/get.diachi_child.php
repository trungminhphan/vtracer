<?php
require_once('header_none.php');
$diachi = new DiaChi();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$level = isset($_GET['level']) ? $_GET['level'] : '';
if($level == 1) echo '<option value="">Chọn Huyện/TP</option>';
if($level == 2) echo '<option value="">Chọn Xã/Phường</option>';
if($id){
	$diachi->id_parent = $id;
	$list = $diachi->get_child_list();
	if($list){
		foreach($list as $l){
			echo '<option value="'.$l['_id'].'">'.$l['ten'].'</option>';		
		}
	} 
}
?>