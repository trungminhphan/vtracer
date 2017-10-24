<?php
require_once('header.php'); 
$loainongsan = new LoaiNongSan();
$roots = $loainongsan->get_roots();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id_parent = isset($_GET['id_parent']) ? $_GET['id_parent'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';

if($id && $act == 'del'){
	$loainongsan->id_parent = $id;
	if($loainongsan->check_child()){
		$msg = 'Lỗi xảy ra, tồn tại loại nông sản con';
		transfers_to('loainongsan.html?msg=' . $msg);
	} else {
		$loainongsan->id = $id;
		if($loainongsan->delete()) transfers_to('loainongsan.html');
		else $msg = 'Lỗi, Không thể xóa.';
	}
}

if(isset($_POST['submit'])){
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$act = isset($_POST['act']) ? $_POST['act'] : '';
	$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
	$id_parent = isset($_POST['id_parent']) ? $_POST['id_parent'] : '';
	
	$arr_dinhkem = array();
	$dinhkem_aliasname = isset($_POST['dinhkem_aliasname']) ? $_POST['dinhkem_aliasname'] : '';
	$dinhkem_filename = isset($_POST['dinhkem_filename']) ? $_POST['dinhkem_filename'] : '';
	if($dinhkem_aliasname){
		foreach ($dinhkem_aliasname as $key => $value) {
			array_push($arr_dinhkem, array('filename' => $dinhkem_filename[$key], 'aliasname' => $value));
		}
	}

	$arr_hinhanh = array();
	$hinhanh_aliasname = isset($_POST['hinhanh_aliasname']) ? $_POST['hinhanh_aliasname'] : '';
	$hinhanh_filename = isset($_POST['hinhanh_filename']) ? $_POST['hinhanh_filename'] : '';
	if($hinhanh_aliasname){
		foreach ($hinhanh_aliasname as $key => $value) {
			array_push($arr_hinhanh, array('filename' => $hinhanh_filename[$key], 'aliasname' => $value));
		}
	}

	$loainongsan->ten = $ten;
	$loainongsan->id_parent = $id_parent;
	$loainongsan->dinhkem = $arr_dinhkem;
	$loainongsan->hinhanh = $arr_hinhanh;
	if($id && $act == 'edit'){
		$loainongsan->id = $id;
		if($loainongsan->check_exists_name()){
			if($loainongsan->edit_exept_name()) transfers_to('loainongsan.html');
			else $msg = 'Không thể chỉnh sửa.';		
		} else {
			if($loainongsan->edit()) transfers_to('loainongsan.html');
			else $msg = 'Không thể chỉnh sửa.';		
		}
	} else {
		if($loainongsan->check_exists_name()){
			$msg = 'Tên nông sản đã tồn tại.';
		} else {
			if($loainongsan->insert()) transfers_to('loainongsan.html');
			else $msg = 'Không thể thêm mới.';	
		}
		
	}
}

if($id && $act=='edit'){
	$loainongsan->id = $id; $lns = $loainongsan->get_one();
	$ten = $lns['ten'];
	$id_parent = $lns['id_parent'];
	$arr_dinhkem = isset($lns['dinhkem']) ? $lns['dinhkem'] : '';
	$arr_hinhanh = isset($lns['hinhanh']) ? $lns['hinhanh'] : '';
}

?>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/loainongsan.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		upload_files();upload_images();delete_file();
		$(".select2").select2();
		<?php if(isset($msg) && $msg ) : ?>
            $.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'" . $msg . "'"; ?>});
        <?php endif; ?>
	})
</script>
<h1><a href="loainongsan.html" class="nav-button transform"><span></span></a>&nbsp;Thông tin loại Nông Sản</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000" enctype="multipart/form-data" id="themloainongsan">
<input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
<input type="hidden" name="act" value="<?php echo isset($act) ? $act : ''; ?>" />
<div class="grid">	
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Tên nông sản</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="ten" id="ten" value="<?php echo isset($ten) ? $ten : ''; ?>" data-validate-func="required" placeholder="Tên loại nông sản" />
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan2 align-right padding5">Cấp cha</div>
		<div class="cell colspan4 input-control select">
			<select name="id_parent" id="id_parent" class="select2">
			<option value="">Chọn cấp trên</option>}
			option
			<?php
			if($roots){
				foreach($roots as $root){
					echo '<option value="'.$root['_id'].'"'.($root['_id'] == $id_parent ? ' selected' : '').'>'.$root['ten'].'</option>';
				}
			}
			?>
			</select>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Đính kèm</div>
	    <div class="cell colspan4 input-control file" data-role="input">
	        <input type="file" name="dinhkem_file[]" class="dinhkem_file" accept="*" multiple="multiple"/>
	        <button class="button"><span class="mif-folder"></span></button>
	    </div>
	</div>
	<div id="file_list">
	<?php
	if(isset($arr_dinhkem) && $arr_dinhkem){
		foreach ($arr_dinhkem as $dk) {
			echo '<div class="row cells12" style="padding:0px 0px 10px 0px;margin:0px;">';
				echo '<div class="cell colspan2"></div>';
				echo '<div class="cell colspan10 input-control text">';
					echo '<input type="hidden" name="dinhkem_aliasname[]" value="'.$dk['aliasname'].'" readonly/>';
					echo '<span class="mif-attachment prepend-icon"></span>';
					echo '<input type="text" name="dinhkem_filename[]" value="'.$dk['filename'].'" class="bg-grayLighter" style="padding-left:50px;"/>';
					echo '<div class="button-group">';
						echo '<a href="get.xoataptin.html?filename='.$dk['aliasname'].'" onclick="return false;" class="delete_file button"><span class="mif-cross fg-red"></span></a>';
						echo '<a href="'.$target_files.$dk['aliasname'].'" class="button" target="_blank"><span class="mif-file-download fg-blue"></span></a>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
	}
	?>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Hình ảnh</div>
		<div class="cell colspan4 input-control file" data-role="input">
	        <input type="file" name="hinhanh_file[]" class="hinhanh_file" accept=".png,.gif,.jpg,.jpeg,.bmp" multiple="multiple"/>
	        <button class="button"><span class="mif-folder"></span></button>
	    </div>
	</div>
	<div id="images_list">
	<?php
	if(isset($arr_hinhanh) && $arr_hinhanh){
		foreach ($arr_hinhanh as $key => $value) {
			echo '<div class="row" style="width:30%; float:left; margin:0 0 3% 3%;">
                <div class="image-container">
                    <div class="frame"><img src="'.$target_images.$value['aliasname'].'"></div>
                    <div class="bg-white" style="position:absolute;top:5px;right:5px;padding:5px;">
                        <a href="get.xoahinhanh.html?filename='.$value['aliasname'].'" onclick="return false;" class="delete_file fg-red"><span class="mif-bin "></span></a>
                        <input type="hidden" name="hinhanh_aliasname[]" value="'.$value['aliasname'].'" readonly/>
                        <input type="hidden" name="hinhanh_filename[]" value="'.$value['filename'].'" class="bg-grayLighter"/>
                    </div>
                </div>
            </div>';
		}
	}
	?>
	</div>
	<div class="row cells12">
		<div class="cell colspan12 align-center">
			<button name="submit" id="submit" value="OK" class="button primary"><span class="mif-checkmark"></span> Cập nhật</button>
			<a href="loainongsan.html" class="button"><span class="mif-keyboard-return"></span> Trở về</a>
		</div>
	</div>
</div>
</form>
<?php require_once('footer.php'); ?>