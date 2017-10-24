<?php
require_once('header_none.php'); 
check_permis(!$users->is_admin());
$thuoc = new Thuoc();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
if($id && $act=='del'){
	$thuoc->id = $id;
	if($thuoc->delete()) transfers_to('thuoc.html?msg=Xóa thành công');
	else transfers_to('thuoc.html?msg=Lỗi không thể xóa');	
}
if($id && $act=='edit'){
	$thuoc->id = $id;
	$pb = $thuoc->get_one();
	$ten = $pb['ten'];
	$thoigiancachly = $pb['thoigiancachly'];
	$ghichu = $pb['ghichu'];
}
?>
<h3><span class="mif-earth"></span>Thông tin Thuốc bảo vệ Nông sản</h3>
<form method="POST" action="post.themthuoc.html" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000"  id="themthuoc">
<input type="hidden" name="id_parent" id="id_parent" value="<?php echo isset($id_parent) ? $id_parent : ''; ?>" />
<input type="hidden" name="id" id="id" value="<?php echo isset($id) ? $id : ''; ?>" />
<input type="hidden" name="act" id="act" value="<?php echo isset($act) ? $act : ''; ?>" />
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan8 input-control text">
			<input type="text" name="ten" id="ten" value="<?php echo isset($ten) ? $ten : ''; ?>" placeholder="Tên Thuốc" data-validate-func="required"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan4 input-control text">
			<input type="number" name="thoigiancachly" id="thoigiancachly" value="<?php echo isset($thoigiancachly) ? $thoigiancachly : ''; ?>" placeholder="Thời gian cách ly" data-validate-func="required"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
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