<?php
require_once('header.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$id_root = isset($_GET['id_root']) ? $_GET['id_root'] : '';
$donvisanxuat = new DonViSanXuat();$diachi = new DiaChi();
$loainongsan = new LoaiNongSan();
$donvisanxuat->id = $id; $dvsx = $donvisanxuat->get_one();
$tendiachi = $diachi->get_diachi($dvsx['diachi']); 
if(isset($dvsx['hinhanh']) && $dvsx['hinhanh']) $hinhanh = '<img src=\"'.$target_images.$dvsx['hinhanh'][0]['aliasname'].'\" width=\"300p\"/>';
else $hinhanh = '';
$longitude = $dvsx['longitude'];
$latitude = $dvsx['latitude'];
?>
<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".colorbox").colorbox({rel:'colorbox','maxWidth':'800px'});
	});
</script>
<h1><a href="donvisanxuat.html?id_root=<?php echo $id_root; ?>" class="nav-button transform"><span></span></a>&nbsp;Thông tin Chi tiết Đơn vị sản xuất</h1>
<?php if($id && $dvsx): ?>
	<div class="align-right">
		<a href="donvisanxuat.html?id_root=<?php echo $id_root; ?>" class="button"><span class="mif-keyboard-return"></span> Trở về</a>
		<a href="themdonvisanxuat.html?id=<?php echo $id; ?>&act=del" onclick="return confirm('Chắc chắn xóa?')" class="button alert"><span class="mif-bin"></span> Xóa</a>
		<a href="themdonvisanxuat.html?id=<?php echo $id; ?>&act=edit" class="button primary"><span class="mif-pencil"></span> Sửa</a>
	</div>
	<div class="grid">
		<div class="row cells12">
			<div class="cell colspan2 align-right">Tên cơ sở sản xuất</div>
			<div class="cell colspan4"><b><?php echo $dvsx['ten']; ?></b></div>
			<div class="cell colspan2 align-right">Người đại diện</div>
			<div class="cell colspan4"><b><?php echo $dvsx['nguoidaidien']; ?></b></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Địa chỉ</div>
			<div class="cell colspan10"><b><?php echo $diachi->get_diachi($dvsx['diachi']); ?></b></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Diện tích</div>
			<div class="cell colspan4"><b><?php echo format_number($dvsx['dientich']); ?> m<sup>2</sup></b></div>
			<div class="cell colspan2 align-right">Loại nông sản</div>
			<div class="cell colspan4"><b><?php echo $loainongsan->get_loainongsan($dvsx['id_loainongsan']); ?></b></div>
		</div>
		<div class="row cells12">
			<?php
				if(isset($dvsx['id_parent']) && $dvsx['id_parent']){
					$donvisanxuat->id = $dvsx['id_parent'];
					$parent = $donvisanxuat->get_one();	
					$ten_parent = $parent['ten'];
				} else { $ten_parent = ''; }
				
			?>
			<div class="cell colspan2 align-right">Trực thuộc đơn vị</div>
			<div class="cell colspan4"><b><?php echo $ten_parent; ?></b></div>
			<div class="cell colspan2 align-right">Điện thoại</div>
			<div class="cell colspan4"><b><?php echo $dvsx['dienthoai']; ?></b></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Website</div>
			<div class="cell colspan4"><b><?php echo $dvsx['website']; ?></b></div>
			<div class="cell colspan2 align-right">Email</div>
			<div class="cell colspan4"><b><?php echo $dvsx['email']; ?></b></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Ghi chú</div>
			<div class="cell colspan10"><?php echo $dvsx['ghichu'];?></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Bản đồ</div>
		</div>
		<div class="row cells12">
			<div class="cell colspan12">
				<div id="map" style="width:100%; height:500px;"></div>
			</div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Hình ảnh</div>
		</div>
		<?php 
		if(isset($dvsx['hinhanh']) && $dvsx['hinhanh']){
			echo '<div class="row cells12">';
			$i = 1;
			foreach ($dvsx['hinhanh'] as $key => $hinh) {
				echo '<div class="cell colspan4">
			        <div class="image-container">
			            <div class="frame"><a href="'.$target_images.$hinh['aliasname'].'" class="colorbox"><img src="'.$target_images.$hinh['aliasname'].'"></a></div>
			        </div>
				</div>';
				if($i%3 == 0){
					echo '</div>';
					echo '<div class="row cells12">';
				}
				$i++;
				
			}
			echo '</div>';
		}
		?>
	</div>
<?php else: ?>
	<h3>Không có thông tin</h3>
<?php endif; ?>
<script type="text/javascript">
    function initMap() {
    	var myCenter = new google.maps.LatLng(<?php echo $latitude; ?>,<?php echo $longitude; ?>);
		var mapCanvas = document.getElementById("map");
		var mapOptions = {center: myCenter, zoom: 15};
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
		var infowindow = new google.maps.InfoWindow({
		  content:"<b><h3><?php echo $dvsx['ten']; ?></h3></b><br />Địa chỉ: <?php echo $tendiachi. '<br /><center>' . $hinhanh; ?></center>"
		});
		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.open(map,marker);
		});
      }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfVa32KSnXaJkPXgcfNSGBC_rfn2VJMsg&callback=initMap"></script>
<?php require_once('footer.php'); ?>