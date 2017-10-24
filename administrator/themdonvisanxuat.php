<?php
require_once('header.php'); 
check_permis(!$users->is_admin());
$donvisanxuat = new DonViSanXuat();
$loainongsan = new LoaiNongSan();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id_root = isset($_GET['id_root']) ? $_GET['id_root'] : '';
$act = isset($_GET['act']) ? $_GET['act'] : '';
$id_parent = isset($_GET['id_parent']) ? $_GET['id_parent'] : '';
$root_list_loainongsan = $loainongsan->get_roots();
$roots_list_donvi = $donvisanxuat->get_list_root();
$diachi = new DiaChi();$roots_list = $diachi->get_roots();
$diachi_1 = '';$diachi_2 = ''; $diachi_3 = '';$diachi_4 = '';

if($id && $act == 'del'){
	$donvisanxuat->id = $id; $dvsx = $donvisanxuat->get_one();
	if($dvsx['hinhanh']){
		foreach($dvsx['hinhanh'] as $key => $value){
			if(file_exists($target_images . $value['aliasname'])){
				@unlink($target_images . $value['aliasname']);
			}
		}
	}
	if($donvisanxuat->delete()) transfers_to('donvisanxuat.html');
	else $msg = 'Lỗi, Không thể xóa.';
}
if(isset($_POST['submit'])){
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$act = isset($_POST['act']) ? $_POST['act'] : '';
	$ten = isset($_POST['ten']) ? $_POST['ten'] : '';
	$dc = isset($_POST['diachi']) ? $_POST['diachi'] : '';
	$nguoidaidien = isset($_POST['nguoidaidien']) ? $_POST['nguoidaidien'] : '';
	$dientich = isset($_POST['dientich']) ? $_POST['dientich'] : '';
	$id_loainongsan = isset($_POST['id_loainongsan']) ? $_POST['id_loainongsan'] : '';
	$id_parent = isset($_POST['id_parent']) ? $_POST['id_parent'] : '';
	$dienthoai = isset($_POST['dienthoai']) ? $_POST['dienthoai'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$website = isset($_POST['website']) ? $_POST['website'] : '';
	$ghichu = isset($_POST['ghichu']) ? $_POST['ghichu'] : '';
	$longitude = isset($_POST['longitude']) ? $_POST['longitude'] : '';
	$latitude = isset($_POST['latitude']) ? $_POST['latitude'] : '';
	$diachi_1 = $dc[0];$diachi_2 = $dc[1]; $diachi_3 = $dc[2];$diachi_4 = $dc[3];
	
	$arr_hinhanh = array();
	$hinhanh_aliasname = isset($_POST['hinhanh_aliasname']) ? $_POST['hinhanh_aliasname'] : '';
	$hinhanh_filename = isset($_POST['hinhanh_filename']) ? $_POST['hinhanh_filename'] : '';
	if($hinhanh_aliasname){
		foreach ($hinhanh_aliasname as $key => $value) {
			array_push($arr_hinhanh, array('filename' => $hinhanh_filename[$key], 'aliasname' => $value));
		}
	}
	$donvisanxuat->ten = $ten;
	$donvisanxuat->diachi = $dc;
	$donvisanxuat->dientich = intval($dientich);
	$donvisanxuat->nguoidaidien = $nguoidaidien;
	$donvisanxuat->id_loainongsan = $id_loainongsan;
	$donvisanxuat->id_parent = $id_parent;
	$donvisanxuat->dienthoai = $dienthoai;
	$donvisanxuat->email = $email;
	$donvisanxuat->website = $website;
	$donvisanxuat->ghichu = $ghichu;
	$donvisanxuat->longitude = $longitude;
	$donvisanxuat->latitude = $latitude;
	$donvisanxuat->hinhanh = $arr_hinhanh;

	if($id && $act == 'edit'){
		$donvisanxuat->id = $id;
		if($donvisanxuat->check_exists_name()){
			if($donvisanxuat->edit_exept_name()) transfers_to('donvisanxuat.html?id_root='.$id_parent);
			else $msg = 'Không thể chỉnh sửa.';		
		} else {
			if($donvisanxuat->edit()) transfers_to('donvisanxuat.html?id_root='.$id_parent);
			else $msg = 'Không thể chỉnh sửa.';		
		}
		
	} else {
		if($donvisanxuat->check_exists_name()){
			$msg = 'Tên đơn vị kinh doanh đã tồn tại.';
		} else {
			if($donvisanxuat->insert()) transfers_to('donvisanxuat.html?id_root='.$id_parent);
			else $msg = 'Không thể thêm mới.';	
		}
	}
}

if($id && $act=='edit'){
	$donvisanxuat->id = $id; $dvsx = $donvisanxuat->get_one();
	$ten = $dvsx['ten'];
	$dc = $dvsx['diachi'];
	$diachi_1 = $dc[0];$diachi_2 = $dc[1];$diachi_3 = $dc[2];$diachi_4 = $dc[3];
	$nguoidaidien = $dvsx['nguoidaidien'];
	$dienthoai = $dvsx['dienthoai'];
	$email = $dvsx['email'];
	$website = $dvsx['website'];
	$dientich = $dvsx['dientich'];
	$id_loainongsan = $dvsx['id_loainongsan'];
	$latitude = $dvsx['latitude'];
	$longitude = $dvsx['longitude'];
	$id_parent = $dvsx['id_parent'];
	$ghichu = $dvsx['ghichu'];
	$arr_hinhanh = isset($dvsx['hinhanh']) ? $dvsx['hinhanh'] : '';
}
?>
<script type="text/javascript" src="js/select2.min.js"></script>
<script type="text/javascript" src="js/donvikinhdoanh.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		upload_images();delete_file();
		$(".select2").select2();
		$("#id_loainongsan").select2({ placeholder : "Loại nông sản"})
		$("#diachi_1").change(function(){
			$.get('get.diachi_child.html?id=' + $(this).val()+'&level=1', function(data){
				$("#diachi_2").html(data);$("#diachi_2").select2();
				$("#diachi_2").change(function(){
					$.get('get.diachi_child.html?id=' + $(this).val()+'&level=2', function(data2){
						$("#diachi_3").html(data2); $("#diachi_3").select2();
					});
				});
			});
		});
		$("#diachi_2").change(function(){
			$.get('get.diachi_child.html?id=' + $(this).val()+'&level=2', function(data2){
				$("#diachi_3").html(data2); $("#diachi_3").select2();
			});
		});
		<?php if(isset($msg) && $msg ) : ?>
            $.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'" . $msg . "'"; ?>});
        <?php endif; ?>
		$("#add_maps").click(function(){
        	var dialog_maps = $("#dialog_maps").data('dialog');
        	dialog_maps.open();
        	$("#close_map").click(function(){
       			dialog_maps.close();        		
        	});
        });
	});
</script>
<h1><a href="donvisanxuat.html" class="nav-button transform"><span></span></a>&nbsp;Thông tin Đơn vị sản xuất</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000" enctype="multipart/form-data" id="themdonvikinhdoanh">
<input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>" />
<input type="hidden" name="act" value="<?php echo isset($act) ? $act : ''; ?>" />
<div class="grid">	
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Tên đơn vị</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="ten" id="ten" value="<?php echo isset($ten) ? $ten : ''; ?>" data-validate-func="required" placeholder="Tên đơn vị sản xuất" />
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan2 align-right padding5">Người đại diện</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="nguoidaidien" id="nguoidaidien" value="<?php echo isset($nguoidaidien) ? $nguoidaidien : ''; ?>" data-validate-func="required" placeholder="Họ tên người đại diện" />
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Địa chỉ</div>
		<div class="cell colspan4 input-control select">
			<select name="diachi[]" id="diachi_1" class="select2">
			<option value="">Chọn Tỉnh/TP</option>
			<?php
			if($roots_list){
				foreach ($roots_list as $root) {
					echo '<option value="'.$root['_id'].'"'.($diachi_1==$root['_id'] ? ' selected' : '').'>'.$root['ten'].'</option>';
				}
			}
			?>
			</select>
		</div>
		<div class="cell colspan2 align-right padding5">Huyện/TP</div>
		<div class="cell colspan4 input-control select">
			<select name="diachi[]" id="diachi_2" class="select2">
				<option value="">Chọn Huyện/TP</option>
				<?php
				if($diachi_1){
					$diachi->id_parent = $diachi_1;
					$child_list_1 = $diachi->get_child_list();
					if($child_list_1){
						foreach ($child_list_1 as $child_1) {
							echo '<option value="'.$child_1['_id'].'"'.($diachi_2==$child_1['_id'] ? ' selected' : '').'>'.$child_1['ten'].'</option>';
						}
					}
				}
				?>
			</select>
		</div>
	</div>
	<div class="row cells12">		
		<div class="cell colspan2 align-right padding5">Xã/Phường</div>
		<div class="cell colspan4 input-control select">
			<select name="diachi[]" id="diachi_3" class="select2">
				<option value="">Chọn Xã/Phường</option>
				<?php
				if($diachi_1 && $diachi_2){
					$diachi->id_parent = $diachi_2;
					$child_list_2 = $diachi->get_child_list();
					if($child_list_2){
						foreach ($child_list_2 as $child_2) {
							echo '<option value="'.$child_2['_id'].'"'.($diachi_3==$child_2['_id'] ? ' selected' : '').'>'.$child_2['ten'].'</option>';
						}
					}
				}
				?>
			</select>
		</div>
		<div class="cell colspan2 align-right padding5">Số nhà, đường,...</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="diachi[]" value="<?php echo isset($diachi_4) ? $diachi_4 : ''; ?>" id="diachi_4" />
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Diện tích (m<sup>2</sup>)</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="dientich" id="dientich" value="<?php echo isset($dientich) ? $dientich : ''; ?>" placeholder="Diện tích tính bằng mét vuông" />
		</div>
		<div class="cell colspan2 align-right padding5">Loại nông sản</div>
		<div class="cell colspan4 input-control select" style="height:100%;position:relative;">	
			<select name="id_loainongsan[]" id="id_loainongsan" multiple="multiple">
				<option value="">Chọn loại nông sản</option>}
				option
				<?php
				if($root_list_loainongsan){
					foreach($root_list_loainongsan as $ns){
						$loainongsan->id_parent = $ns['_id'];
						$list_child = $loainongsan->get_child_list();
						echo '<optgroup label="'.$ns['ten'].'">';
						//echo '<option value="'.$ns['_id'].'">'.$ns['ten'].'</option>';
						if($list_child){
							foreach($list_child as $child){
								echo '<option value="'.$child['_id'].'"'.(in_array($child['_id'], $id_loainongsan) ? ' selected' : '').'> --- '.$child['ten'].'</option>';
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
		<div class="cell colspan2 align-right padding5">Trực thuộc đơn vị</div>
		<div class="cell colspan4 input-control select">
			<select name="id_parent" id="id_parent" class="select2">
				<option value="">Chọn đơn vị</option>
				<?php
				if($roots_list_donvi){
					foreach ($roots_list_donvi as $dv) {
						echo '<option value="'.$dv['_id'].'"'.($dv['_id']==$id_parent ? ' selected':'').'>'.$dv['ten'].'</option>';
					}
				}
				?>
			</select>
		</div>
		<div class="cell colspan2 align-right padding5">Điện thoại</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="dienthoai" id="dienthoai" value="<?php echo isset($dienthoai) ? $dienthoai : ''; ?>" data-validate-func="required" placeholder="Điện thoại" />
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right padding5">Website</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="website" id="website" value="<?php echo isset($website) ? $website : ''; ?>" placeholder="Website" />
			<span class="input-state-error mif-warning"></span><span class="input-state-success mif-checkmark"></span>
		</div>
		<div class="cell colspan2 align-right padding5">Email</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="email" id="email" value="<?php echo isset($email) ? $email : ''; ?>" placeholder="Email" />
		</div>
    </div>
    <div class="row cells12">
    	<div class="cell colspan2 align-right padding5">Latitude</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="latitude" id="latitude" value="<?php echo isset($latitude) ? $latitude : ''; ?>" placeholder="Latitude" readonly/>
			<button type="button" class="button" id="add_maps"><span class="mif-location"></span></button>
		</div>
		<div class="cell colspan2 align-right padding5">Longitude</div>
		<div class="cell colspan4 input-control text">
			<input type="text" name="longitude" id="longitude" value="<?php echo isset($longitude) ? $longitude : ''; ?>" placeholder="Longitude" readonly/>
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
			<a href="donvisanxuat.html?id_root=<?php echo $id_root; ?>" class="button"><span class="mif-keyboard-return"></span> Trở về</a>
		</div>
	</div>
</div>
</form>
<div data-role="dialog" id="dialog_maps" class="padding20" data-close-button="true">
	<div id="maps_info" style="width:800px;height:500px;"></div>
	<br />
	<center>
	Latitude: <div class="input-control text"><input type="text" id="lat" readonly /></div>
	Longitude: <div class="input-control text"><input type="text" id="lng" readonly/></div>
			<button type="button" class="button alert" id="close_map"><span class="mif-cancel"></span> Đóng</button>
	</center>
</div>
<script type="text/javascript">
   function initMap() {
        var myCenter = new google.maps.LatLng(10.371154,105.432186);
		var mapCanvas = document.getElementById("maps_info");
		var mapOptions = {center: myCenter, zoom: 10};
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
		google.maps.event.addListener(map,'click',function(e) {
			var t = e.latLng;
		    marker.setPosition(e.latLng);
		    document.getElementById("latitude").value = t.lat();
		    document.getElementById("longitude").value = t.lng();
		    document.getElementById("lat").value = t.lat();
		    document.getElementById("lng").value = t.lng();
		    //var pos = map.getZoom();
		    //map.setZoom(9);
		    //map.setCenter(marker.getPosition());
		});
      }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfVa32KSnXaJkPXgcfNSGBC_rfn2VJMsg&callback=initMap"></script>
<?php require_once('footer.php'); ?>
