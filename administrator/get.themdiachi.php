<?php
require_once('header_none.php'); 
check_permis(!$users->is_admin());
$diachi = new DiaChi();
$roots_list = $diachi->get_roots();
$level = isset($_GET['level']) ? $_GET['level'] : 0;
$id_parent = isset($_GET['id_parent']) ? $_GET['id_parent'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id_root = isset($_GET['id_root']) ? $_GET['id_root'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
if($id && $act=='del'){
	$diachi->id = $id;
	if($diachi->check_child()){
		transfers_to('diachi.html?id='.$id_parent.'&id_root='.$id_root.'&msg=Không thể xóa, vì ràng buộc.');
	} else {
		if($diachi->delete()) transfers_to('diachi.html?id='.$id_parent.'&id_root='.$id_root.'&msg=Xóa thành công');
		else transfers_to('diachi.html?id='.$id_parent.'&id_root='.$id_root.'&msg=Lỗi không thể xóa');
	}

}
if($id && $act=='edit'){
	$diachi->id = $id;
	$dc = $diachi->get_one();
	$ten = $dc['ten'];
	$id_parent = $dc['id_parent'];
	$ghichu = $dc['ghichu'];
}
?>
<h3><span class="mif-earth"></span>Thông tin địa chỉ</h3>
<form method="POST" action="post.themdiachi.html" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000"  id="themdiachi">
<input type="hidden" name="id_parent" id="id_parent" value="<?php echo isset($id_parent) ? $id_parent : ''; ?>" />
<input type="hidden" name="id" id="id" value="<?php echo isset($id) ? $id : ''; ?>" />
<input type="hidden" name="act" id="act" value="<?php echo isset($act) ? $act : ''; ?>" />
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan6 input-control text">
			<input type="text" name="ten" id="ten" value="<?php echo isset($ten) ? $ten : ''; ?>" placeholder="Tên địa chỉ" data-validate-func="required"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan6 input-control select">
			<select name="id_parent_show" id="id_parent_show" disabled>
				<option value="">Chọn Cấp trên</option>
				<?php
				if($roots_list && $level > 0){
					foreach($roots_list as $root){
						echo '<option value="'.$root['_id'].'"'.(($level==1 && $id_parent==$root['_id']) ? ' selected' : '').'>'.$root['ten'].'</option>';
						if($level==1 && $id_parent==$root['_id']) $id_root = $root['_id'];
						if($id_parent && $level == 2){
							$diachi->id_parent = $root['_id'];
    						$child_list_1 = $diachi->get_child_list();
    						if($child_list_1 && $child_list_1->count() > 0){
					            foreach($child_list_1 as $child_1){
					            	echo '<option value="" '.($child_1['_id'] == $id_parent ? ' selected' : '').'>'.$child_1['ten'] .' - ' . $root['ten'].'</option>';
					            	if($child_1['_id'] == $id_parent) $id_root = $root['_id'];
					            }
					        } 
    					}
					}
				}
				?>
			</select>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan12 input-control textarea">
			<textarea name="ghichu" id="ghichu" placeholder="Ghi chú"><?php echo isset($ghichu) ? $ghichu : ''; ?> </textarea>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan12 align-center">
			<input type="hidden" name="id_root" id="id_root" value="<?php echo isset($id_root) ? $id_root: ''; ?>" />
			<button name="submit" id="submit" value="OK" class="button primary"><span class="mif-checkmark"></span> Cập nhật</button>
			<a href="#" onclick="return false;" class="button" id="close_dialog"><span class="mif-cancel"></span> Đóng</a>
		</div>
	</div>
</div>
</form>