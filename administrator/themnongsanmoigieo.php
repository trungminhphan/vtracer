<?php
require_once('header.php');
check_permis(!$users->is_admin());
$loainongsan = new LoaiNongSan(); $donvisanxuat = new DonViSanXuat();
$donvisoche = new DonViSoChe(); $donvikinhdoanh = new DonViKinhDoanh();
$sanpham = new SanPham();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
if($id && $act == 'del'){
	$sanpham->id = $id; $sp = $sanpham->get_one();
	if(isset($sp['hinhanh']) && $sp['hinhanh']){
		foreach ($sp['hinhanh'] as $key => $value) {
			@unlink($target_images . $value['aliasname']);
		}
	}

	if(isset($sp['bonphan']) && $sp['bonphan']){
		foreach($sp['bonphan'] as $bp){
			if(isset($bp['hinhanh']) && $bp['hinhanh']){
				foreach ($bp['hinhanh'] as $hbp) {
					@unlink($target_images . $hbp['aliasname']);
				}
			}
		}
	}

	if(isset($sp['phunthuoc']) && $sp['phunthuoc']){
		foreach($sp['phunthuoc'] as $pt){
			if(isset($pt['hinhanh']) && $pt['hinhanh']){
				foreach ($pt['hinhanh'] as $hpt) {
					@unlink($target_images . $hpt['aliasname']);
				}
			}
		}
	}

	if($sanpham->delete()) transfers_to('nongsanmoigieo.html');
	else $msg = 'Không thể xoá.';
}
$loainongsan_root_list = $loainongsan->get_roots();
$donvisanxuat_root_list = $donvisanxuat->get_list_root();
$donvisoche_list = $donvisoche->get_all_list();
$donvikinhdoanh_list = $donvikinhdoanh->get_all_list();
$id_loainongsan = ''; $id_donvisanxuat='';$id_donvisoche='';$id_donvikinhdoanh=array();

if(isset($_POST['submit'])){
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$act = isset($_POST['act']) ? $_POST['act'] : '';
	$matrangtrai = isset($_POST['matrangtrai']) ? $_POST['matrangtrai'] : '';
	$masanpham = isset($_POST['masanpham']) ? $_POST['masanpham'] : '';
	$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
	$ngaygieo = isset($_POST['ngaygieo']) ? $_POST['ngaygieo'] : '';
	$id_loainongsan = isset($_POST['id_loainongsan']) ? $_POST['id_loainongsan'] : '';
	$id_donvisanxuat = isset($_POST['id_donvisanxuat']) ? $_POST['id_donvisanxuat'] : '';
	$dientich = isset($_POST['dientich']) ? $_POST['dientich'] : 0;
	$ngaydukienthuhoach = isset($_POST['ngaydukienthuhoach']) ? $_POST['ngaydukienthuhoach'] : '';
	$ngaythuhoach = isset($_POST['ngaythuhoach']) ? $_POST['ngaythuhoach'] : '';
	$sanluong = isset($_POST['sanluong']) ? $_POST['sanluong'] : 0;
	$id_donvisoche = isset($_POST['id_donvisoche']) ? $_POST['id_donvisoche'] : '';
	$quicachdonggoi = isset($_POST['quicachdonggoi']) ? $_POST['quicachdonggoi'] : '';
	$ngaydonggoi = isset($_POST['ngaydonggoi']) ? $_POST['ngaydonggoi'] : '';
	$hansudung = isset($_POST['hansudung']) ? $_POST['hansudung'] : '';
	$huongdansudung = isset($_POST['huongdansudung']) ? $_POST['huongdansudung'] : '';
	$huongdanbaoquan = isset($_POST['huongdanbaoquan']) ? $_POST['huongdanbaoquan'] : '';
	$id_donvikinhdoanh = isset($_POST['id_donvikinhdoanh']) ? $_POST['id_donvikinhdoanh'] : '';
	$ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : '';
	$arr_hinhanh = array();
	$hinhanh_aliasname = isset($_POST['hinhanh_aliasname']) ? $_POST['hinhanh_aliasname'] : '';
	$hinhanh_filename = isset($_POST['hinhanh_filename']) ? $_POST['hinhanh_filename'] : '';
	if($hinhanh_aliasname){
		foreach ($hinhanh_aliasname as $key => $value) {
			array_push($arr_hinhanh, array('filename' => $hinhanh_filename[$key], 'aliasname' => $value));
		}
	}
	$id_user_update = isset($_POST['id_user_update']) ? $_POST['id_user_update'] : '';
	$id_user = $users->get_userid();

	$sanpham->matrangtrai = $matrangtrai;
	$sanpham->masanpham = $masanpham;
	$sanpham->ten = $ten;
	$sanpham->ngaygieo = $ngaygieo ? new MongoDate(convert_date_yyyy_mm_dd($ngaygieo)) : ''; //convert_date_yyyy_mm_dd
	$sanpham->id_loainongsan = $id_loainongsan;
	$sanpham->id_donvisanxuat = $id_donvisanxuat;
	$sanpham->dientich = $dientich;
	$sanpham->ngaydukienthuhoach = $ngaydukienthuhoach ? new MongoDate(convert_date_yyyy_mm_dd($ngaydukienthuhoach)) : ''; //convert_date_yyyy_mm_dd
	$sanpham->ngaythuhoach = $ngaythuhoach ? new MongoDate(convert_date_yyyy_mm_dd($ngaythuhoach)) : ''; //convert_date_yyyy_mm_dd
	$sanpham->sanluong = $sanluong;
	$sanpham->id_donvisoche = $id_donvisoche;
	$sanpham->quicachdonggoi = $quicachdonggoi;
	$sanpham->ngaydonggoi = $ngaydonggoi ? new MongoDate(convert_date_yyyy_mm_dd($ngaydonggoi)) : ''; //convert_date_yyyy_mm_dd
	$sanpham->hansudung = $hansudung;
	$sanpham->huongdansudung = $huongdansudung;
	$sanpham->huongdanbaoquan = $huongdanbaoquan;
	$sanpham->id_donvikinhdoanh = $id_donvikinhdoanh;
	$sanpham->ghichu = $ghichu;
	$sanpham->hinhanh = $arr_hinhanh;
	$sanpham->id_user = $id_user;
	$sanpham->id_user_update = $id_user_update;
	if($id && $act == 'edit'){
		$sanpham->id = $id;
		if($sanpham->edit()) transfers_to('nongsanmoigieo.html?msg=Chỉnh sửa thành công');
		else $msg = 'Không thể chỉnh sửa';
	} else {
		if($sanpham->insert()) transfers_to('nongsanmoigieo.html?msg=Thêm thành công');
		else $msg = 'Không thể thêm mới';
	}
}
if($id && $act == 'edit'){
	$sanpham->id = $id; $sp = $sanpham->get_one();
	$matrangtrai = $sp['matrangtrai'];
	$masanpham = $sp['masanpham'];
	$ten = $sp['ten'];
	$ngaygieo = $sp['ngaygieo'] ? date("d/m/Y", $sp['ngaygieo']->sec) : '';
	$ngaydukienthuhoach = $sp['ngaydukienthuhoach'] ? date("d/m/Y", $sp['ngaydukienthuhoach']->sec) : '';
	$ngaythuhoach = $sp['ngaythuhoach'] ? date("d/m/Y", $sp['ngaythuhoach']->sec) : '';
	$id_loainongsan = $sp['id_loainongsan'];
	$id_donvisanxuat = $sp['id_donvisanxuat'];
	$dientich = $sp['dientich'];$sanluong = $sp['sanluong'];
	$id_donvisoche = $sp['id_donvisoche'];
	$quicachdonggoi = $sp['quicachdonggoi'];
	$ngaydonggoi = $sp['ngaydonggoi'] ? date("d/m/Y", $sp['ngaydonggoi']->sec) : '';
	$hansudung = $sp['hansudung'];
	$huongdansudung = $sp['huongdansudung'];
	$huongdanbaoquan = $sp['huongdanbaoquan'];
	$id_donvikinhdoanh = $sp['id_donvikinhdoanh'];
	$ghichu = $sp['ghichu'];
	$arr_hinhanh = $sp['hinhanh'];
	$id_user_update = $sp['id_user_update'];
}
?>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/jquery.inputmask.js"></script>
<script type="text/javascript" src="js/sanpham.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".ngaythangnam").inputmask();$(".select2").select2();
		upload_images();delete_file();
		random_code("matrangtrai"); random_code("masanpham");
		<?php if(isset($msg) && $msg ) : ?>
            $.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'" . $msg . "'"; ?>});
        <?php endif; ?>
	});
</script>
<h1><a href="nongsanmoigieo.html" class="nav-button transform"><span></span></a>&nbsp;Thông tin chi tiết Nông sản</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000" enctype="multipart/form-data" id="themnongsanmoigieo">
<input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
<input type="hidden" name="act" value="<?php echo isset($act) ? $act : ''; ?>" />
<div class="grid">	
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Mã trang trại (ruộng)</div>
		<div class="cell colspan4 input-control text">
			<input type="text" data-validate-func="minlength" data-validate-arg="13" data-validate-hint="Ít nhất 13 ký tự" name="matrangtrai" id="matrangtrai" value="<?php echo isset($matrangtrai) ? $matrangtrai : ''; ?>" data-validate-func="required" placeholder="Mã trang trại hoặc ruộng" <?php echo $id ? 'disabled' : ''; ?>/>
			<a href="get.random_code.html" class="button matrangtrai" name="matrangtrai" onclick="return false;"><span class="mif-qrcode"></span></a>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan2 align-right padding5">Mã sản phẩm</div>
		<div class="cell colspan4 input-control text">
			<input type="text" data-validate-func="minlength" data-validate-arg="13" data-validate-hint="Ít nhất 13 ký tự" name="masanpham" id="masanpham" value="<?php echo isset($masanpham) ? $masanpham : ''; ?>" data-validate-func="required" placeholder="Mã sản phẩm" <?php echo $id ? 'disabled' : ''; ?> />
			<a href="get.random_code.html" class="button masanpham" name="masanpham" onclick="return false;"><span class="mif-qrcode"></span></a>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Tên sản phẩm</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="ten" id="ten" value="<?php echo isset($ten) ? $ten : ''; ?>" data-validate-func="required" placeholder="Tên sản phẩm" />
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan2 align-right padding5">Loại nông sản</div>
		<div class="cell colspan4 input-control select">
			<select id="id_loainongsan" name="id_loainongsan" class="select2">
				<option value="">Chọn loại nông sản</option>
				<?php
				if($loainongsan_root_list){
					foreach ($loainongsan_root_list as $ns) {
						$loainongsan->id_parent = $ns['_id'];
						$list_child = $loainongsan->get_child_list();
						echo '<optgroup label="'.$ns['ten'].'">';
						if($list_child){
							foreach($list_child as $child){
								echo '<option value="'.$child['_id'].'"'.($child['_id'] == $id_loainongsan ? ' selected' : '').'> --- '.$child['ten'].'</option>';
							}
						}
						echo '</optgroup>';
					}
				}
				?>
			</select>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Đơn vị sản xuất</div>
		<div class="cell colspan4 input-control select">
			<select id="id_donvisanxuat" name="id_donvisanxuat" class="select2">
				<option value="">Chọn đơn vị sản xuất</option>
				<?php
				if($donvisanxuat_root_list){
					foreach ($donvisanxuat_root_list as $sx) {
						$donvisanxuat->id_parent = $sx['_id'];
						$list_child = $donvisanxuat->get_child_list();
						echo '<optgroup label="'.$sx['ten'].'">';
						if($list_child){
							foreach($list_child as $child){
								echo '<option value="'.$child['_id'].'"'.($child['_id'] == $id_donvisanxuat ? ' selected' : '').'> --- '.$child['ten'].'</option>';
							}
						}
						echo '</optgroup>';
					}
				}
				?>
			</select>
		</div>
		<div class="cell colspan2 align-right padding5">Ngày gieo</div>
		<div class="cell colspan4 input-control text" data-role="datepicker" data-format="dd/mm/yyyy">
			<input type="text" name="ngaygieo" id="ngaygieo" value="<?php echo isset($ngaygieo) ? $ngaygieo : ''; ?>" data-validate-func="required" placeholder="Ngày gieo, ngày xuống giống" data-inputmask="'alias': 'date'" class="ngaythangnam"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Diện tích gieo trồng (m<sup>2</sup>)</div>
		<div class="cell colspan4 input-control text">
			<input type="number" name="dientich" id="dientich" value="<?php echo isset($dientich) ? $dientich : ''; ?>" placeholder="Diện tích gieo trồng" />
		</div>
		<div class="cell colspan2 align-right padding5">Ngày dự kiến thu hoạch</div>
		<div class="cell colspan4 input-control text" data-role="datepicker" data-format="dd/mm/yyyy">
			<input type="text" name="ngaydukienthuhoach" id="ngaydukienthuhoach" value="<?php echo isset($ngaydukienthuhoach) ? $ngaydukienthuhoach : ''; ?>" placeholder="Ngày dự kiến thu hoạch" data-inputmask="'alias': 'date'" class="ngaythangnam"/>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Ngày thu hoạch chính thức</div>
		<div class="cell colspan4 input-control text" data-role="datepicker" data-format="dd/mm/yyyy">
			<input type="text" name="ngaythuhoach" id="ngaythuhoach" value="<?php echo isset($ngaythuhoach) ? $ngaythuhoach : ''; ?>" placeholder="Ngày thu hoạch" data-inputmask="'alias': 'date'" class="ngaythangnam"/>
		</div>
		<div class="cell colspan2 align-right padding5">Sản lượng (kg)</div>
		<div class="cell colspan4 input-control text">
			<input type="number" name="sanluong" id="sanluong" value="<?php echo isset($sanluong) ? $sanluong : ''; ?>" placeholder="Sản lượng thu hoạch" />
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Đơn vị sơ chế</div>
		<div class="cell colspan4 input-control select">
			<select id="id_donvidoche" name="id_donvisoche" class="select2">
				<option value="">Chọn đơn vị sơ chế</option>
			<?php
			if($donvisoche_list){
				foreach ($donvisoche_list as $sc) {
					echo '<option value="'.$sc['_id'].'"'.($sc['_id'] == $id_donvisoche ? ' selected' : '').'>'.$sc['ten'].'</option>';
				}
			}
			?>
			</select>
		</div>
		<div class="cell colspan2 align-right padding5">Qui cách đóng gói</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="quicachdonggoi" id="quicachdonggoi" value="<?php echo isset($quicachdonggoi) ? $quicachdonggoi : ''; ?>" placeholder="Qui cách đóng gói" />
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Ngày đóng gói</div>
		<div class="cell colspan4 input-control text" data-role="datepicker" data-format="dd/mm/yyyy">
			<input type="text" name="ngaydonggoi" id="ngaydonggoi" value="<?php echo isset($ngaydonggoi) ? $ngaydonggoi : ''; ?>" placeholder="Ngày đóng gói sản phẩm" data-inputmask="'alias': 'date'" class="ngaythangnam"/>
		</div>
		<div class="cell colspan2 align-right padding5">Hạn sử dụng</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="hansudung" id="hansudung" value="<?php echo isset($hansudung) ? $hansudung : ''; ?>" placeholder="Hạn sử dụng" />
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Hướng dẫn sử dụng</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="huongdansudung" id="huongdansudung" value="<?php echo isset($huongdansudung) ? $huongdansudung : ''; ?>" placeholder="Hướng dẫn sử dụng" />
		</div>
		<div class="cell colspan2 align-right padding5">Hướng dẫn bảo quản</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="huongdanbaoquan" id="huongdanbaoquan" value="<?php echo isset($huongdanbaoquan) ? $huongdanbaoquan : ''; ?>" placeholder="Hướng dẫn bảo quản" />
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Đơn vị kinh doanh</div>
		<div class="cell colspan10 input-control select" style="height:100%;position:relative;">
			<select id="id_donvikinhdoanh" name="id_donvikinhdoanh[]" class="select2" multiple="multiple">
				<option value="">Chọn đơn kinh doanh</option>
			<?php
			if($donvikinhdoanh_list){
				foreach ($donvikinhdoanh_list as $kd) {
					echo '<option value="'.$kd['_id'].'"'.(in_array($kd['_id'],$id_donvikinhdoanh) ? ' selected' : '').'>'.$kd['ten'].'</option>';
				}
			}
			?>
			</select>
		</div>
	</div>
	<div class="row cells12">
    	<div class="cell colspan2 align-right padding5">Ghi chú</div>
	    <div class="cell colspan10 input-control textarea align-right"
	    data-role="input"  data-text-auto-resize="true">
	    <textarea name="ghichu" id="ghichu"><?php echo isset($ghichu) ? $ghichu : '';?></textarea>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Hình ảnh</div>
		<div class="cell colspan4 input-control file" data-role="input">
	        <input type="file" name="hinhanh_file[]" class="hinhanh_file" accept=".png,.gif,.jpg,.jpeg,.bmp" multiple="multiple" placeholder="Click vào chọn hình" />
	        <button class="button"><span class="mif-folder"></span></button>
	    </div>
	    <div class="cell colspan2 align-right padding5">Cấp cho tài khoản cập nhật</div>
		<div class="cell colspan4 input-control select">
		<select name="id_user_update" id="id_user_update" class="select2">
		<?php
		$updater_list = $users->get_list_updater();
		if($updater_list){
			foreach ($updater_list as $updater) {
				echo '<option value="'.$updater['_id'].'"'.($id_user_update == $updater['_id'] ? ' selected': '').'>'.$updater['username'] . ' - '. $updater['person'] .'</option>';
			}
		}
		?>
		</select>
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
			<a href="nongsanmoigieo.html" class="button"><span class="mif-keyboard-return"></span> Trở về</a>
		</div>
	</div>
</div>
</form>
<?php require_once('footer.php'); ?>