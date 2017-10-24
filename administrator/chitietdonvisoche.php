<?php
require_once('header.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
$donvisoche = new DonViSoChe();$diachi = new DiaChi();
$donvisoche->id = $id; $dvsc = $donvisoche->get_one();
$tendiachi = $diachi->get_diachi($dvsc['diachi']); 
if(isset($dvsc['hinhanh']) && $dvsc['hinhanh']) $hinhanh = '<img src=\"'.$target_images.$dvsc['hinhanh'][0]['aliasname'].'\" width=\"300p\"/>';
else $hinhanh = '';
$longitude = $dvsc['longitude'];
$latitude = $dvsc['latitude'];
?>
<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".colorbox").colorbox({rel:'colorbox','maxWidth':'800px'});
	});
</script>
<h1><a href="donvisoche.html" class="nav-button transform"><span></span></a>&nbsp;Thông tin Chi tiết Đơn vị Sơ chế</h1>
<?php if($id && $dvsc): ?>
	<div class="align-right">
		<a href="donvisoche.html" class="button"><span class="mif-keyboard-return"></span> Trở về</a>
		<a href="themdonvisoche.html?id=<?php echo $id; ?>&act=del" onclick="return confirm('Chắc chắn xóa?')" class="button alert"><span class="mif-bin"></span> Xóa</a>
		<a href="themdonvisoche.html?id=<?php echo $id; ?>&act=edit" class="button primary"><span class="mif-pencil"></span> Sửa</a>
	</div>
	<div class="grid">
		<div class="row cells12">
			<div class="cell colspan2 align-right">Tên đơn vị Sơ chế</div>
			<div class="cell colspan4"><b><?php echo $dvsc['ten']; ?></b></div>
			<div class="cell colspan2 align-right">Người đại diện</div>
			<div class="cell colspan4"><b><?php echo $dvsc['nguoidaidien']; ?></b></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Địa chỉ</div>
			<div class="cell colspan10"><b><?php echo $diachi->get_diachi($dvsc['diachi']); ?></b></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Website</div>
			<div class="cell colspan4"><b><?php echo $dvsc['website']; ?></b></div>
			<div class="cell colspan2 align-right">Email</div>
			<div class="cell colspan4"><b><?php echo $dvsc['email']; ?></b></div>
		</div>
		<div class="row cells12">
			<div class="cell colspan2 align-right">Điện thoại</div>
			<div class="cell colspan4"><?php echo $dvsc['dienthoai'];?></div>
			<div class="cell colspan2 align-right">Ghi chú</div>
			<div class="cell colspan4"><?php echo $dvsc['ghichu'];?></div>
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
		if(isset($dvsc['hinhanh']) && $dvsc['hinhanh']){
			echo '<div class="row cells12">';
			$i = 1;
			foreach ($dvsc['hinhanh'] as $key => $hinh) {
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
		  content:"<b><h3><?php echo $dvsc['ten']; ?></h3></b><br />Địa chỉ: <?php echo $tendiachi. '<br /><center>' . $hinhanh; ?></center>"
		});
		google.maps.event.addListener(marker, 'click', function() {
		  infowindow.open(map,marker);
		});
      }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfVa32KSnXaJkPXgcfNSGBC_rfn2VJMsg&callback=initMap"></script>
<?php require_once('footer.php'); ?>