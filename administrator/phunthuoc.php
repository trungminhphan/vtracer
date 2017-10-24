<?php
require_once('header.php');
check_permis(!$users->is_admin());
$loainongsan = new LoaiNongSan(); $donvisanxuat = new DonViSanXuat();
$donvisoche = new DonViSoChe(); $donvikinhdoanh = new DonViKinhDoanh();
$sanpham = new SanPham();$thuoc = new Thuoc();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$sanpham->id = $id; $sp = $sanpham->get_one();
//array(_id, id_user, id_thuoc, lieuluong, phuongphap, thoigiancachly, ngaythuchien, nguoithuchien, hinhanh, date_post)
$thuoc_list = $thuoc->get_all_list();
$id_user = $users->get_userid();
$users->id = $id_user; $u = $users->get_one();

if(isset($_POST['submit'])){
	$arr_phunthuoc = array();
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$id_thuoc = isset($_POST['id_thuoc']) ? $_POST['id_thuoc'] : '';
	$thoigiancachly = isset($_POST['thoigiancachly']) ? $_POST['thoigiancachly'] : '';
	$lieuluong = isset($_POST['lieuluong']) ? $_POST['lieuluong'] : '';
	$phuongphap = isset($_POST['phuongphap']) ? $_POST['phuongphap'] : '';
	$ngaythuchien = isset($_POST['ngaythuchien']) ? $_POST['ngaythuchien'] : '';
	$nguoithuchien = isset($_POST['nguoithuchien']) ? $_POST['nguoithuchien'] : '';
	$arr_hinhanh = array();
	$hinhanh_aliasname = isset($_POST['hinhanh_aliasname']) ? $_POST['hinhanh_aliasname'] : '';
	$hinhanh_filename = isset($_POST['hinhanh_filename']) ? $_POST['hinhanh_filename'] : '';
	if($hinhanh_aliasname){
		foreach ($hinhanh_aliasname as $key => $value) {
			array_push($arr_hinhanh, array('filename' => $hinhanh_filename[$key], 'aliasname' => $value));
		}
	}
	$arr_phunthuoc = array(
		'_id' => new MongoId(),
		'id_thuoc' => $id_thuoc ? new MongoId($id_thuoc) : '',
		'thoigiancachly' => intval($thoigiancachly),
		'lieuluong' => $lieuluong,
		'phuongphap' => $phuongphap,
		'ngaythuchien' => $ngaythuchien ? new MongoDate(convert_date_yyyy_mm_dd($ngaythuchien)) : '',
		'nguoithuchien' => $nguoithuchien,
		'hinhanh' => $arr_hinhanh,
		'id_user' => new MongoId($id_user),
		'date_post' => new MongoDate()
	);
	$sanpham->id = $id;
	$sanpham->phunthuoc = $arr_phunthuoc;
	if($sanpham->push_phunthuoc()) transfers_to('chitietnongsan.html?id='.$id);
	else $msg = 'Không thể thêm';
	
}

?>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/sanpham.js"></script>
<script type="text/javascript" src="js/jquery.inputmask.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".select2").select2();$(".ngaythangnam").inputmask();
		upload_images();delete_file();
		$("#id_thuoc").change(function(){
			var _id = $(this).val();
			$.get('get.thoigiancachly.html?id='+_id,function(data){
				$("#thoigiancachly").val(data);
			});

		});
		<?php if(isset($msg) && $msg ) : ?>
            $.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'" . $msg . "'"; ?>});
        <?php endif; ?>
	});
</script>
<h1><a href="chitietnongsan.html?id=<?php echo $id; ?>" class="nav-button transform"><span></span></a>&nbsp;Thêm thông tin Phun thuốc cho Nông sản</h1>
<form method="POST" action="<?php echo $_SERVER['REQUEST_URI']; ?>" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000" enctype="multipart/form-data" id="themnongsanmoigieo">
<input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Tên thuốc</div>
		<div class="cell colspan4 input-control select">
			<select name="id_thuoc" id="id_thuoc" class="select2">
			<<option value="">Chọn tên thuốc</option>}
			option
			<?php
			if($thuoc_list){
				foreach($thuoc_list as $t){
					echo '<option value="'.$t['_id'].'">'.$t['ten'].'</option>';
				}
			}
			?>
			</select>
		</div>
		<div class="cell colspan2 align-right padding5">Thời gian cách ly (ngày)</div>
		<div class="cell colspan4 input-control text">
			<input type="number" name="thoigiancachly" id="thoigiancachly" value="" data-validate-func="required" readonly placeholder="Liều lượng dùng"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Liều lượng</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="lieuluong" id="lieuluong" value="" data-validate-func="required" placeholder="Liều lượng dùng"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan2 align-right padding5">Phương pháp</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="phuongphap" id="phuongphap" value="" data-validate-func="required" placeholder="Phương pháp thực hiện"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Ngày thực hiện</div>
		<div class="cell colspan4 input-control text" data-role="datepicker" data-format="dd/mm/yyyy">
			<input type="text" name="ngaythuchien" id="ngaythuchien" value="<?php echo isset($ngaythuchien) ? $ngaythuchien : ''; ?>" data-validate-func="required" placeholder="Ngày thực hiện" data-inputmask="'alias': 'date'" class="ngaythangnam"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan2 align-right padding5">Người thực hiện</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="nguoithuchien" id="nguoithuchien" value="<?php echo $u['person']; ?>" data-validate-func="required" placeholder="Họ tên người thực hiện"/>
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Hình ảnh</div>
		<div class="cell colspan4 input-control file" data-role="input">
	        <input type="file" name="hinhanh_file[]" class="hinhanh_file" accept=".png,.gif,.jpg,.jpeg,.bmp" multiple="multiple" placeholder="Click vào chọn hình" />
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
			<a href="chitietnongsan.html?id=<?php echo $id; ?>" class="button"><span class="mif-keyboard-return"></span> Trở về</a>
		</div>
	</div>
</div>
</form>
<?php require_once('footer.php'); ?>
