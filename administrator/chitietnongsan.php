<?php
require_once('header.php');
check_permis(!$users->is_admin());
$loainongsan = new LoaiNongSan(); $donvisanxuat = new DonViSanXuat();
$donvisoche = new DonViSoChe(); $donvikinhdoanh = new DonViKinhDoanh();
$sanpham = new SanPham();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sanpham->id = $id; $sp = $sanpham->get_one();
?>
<link rel="stylesheet" href="css/colorbox.css" />
<script src="js/jquery.colorbox.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".colorbox").colorbox({rel:'colorbox','maxWidth':'800px'});
	});
</script>
<h1><a href="nongsanmoigieo.html" class="nav-button transform"><span></span></a>&nbsp;Thông tin chi tiết Nông sản</h1>
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan2 align-right">Mã trang trại (ruộng)</div>
		<div class="cell colspan4"><b><?php echo $sp['matrangtrai']; ?></b></div>
		<div class="cell colspan2 align-right">Mã sản phẩm</div>
		<div class="cell colspan4"><b><?php echo $sp['masanpham']; ?></b></div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Tên nông sản</div>
		<div class="cell colspan4"><b><?php echo $sp['ten']; ?></b></div>
		<div class="cell colspan2 align-right">Thuộc loại nông sản</div>
		<div class="cell colspan4">
		<?php
		if(isset($sp['id_loainongsan']) && $sp['id_loainongsan']){
			$loainongsan->id = $sp['id_loainongsan']; $lns = $loainongsan->get_one();
			echo '<b>' .$lns['ten'] .'</b>';
		}
		?>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Đơn vị sản xuất</div>
		<div class="cell colspan4">
		<?php
		if(isset($sp['id_donvisanxuat']) && $sp['id_donvisanxuat']){
			$donvisanxuat->id = $sp['id_donvisanxuat']; $dvsx = $donvisanxuat->get_one();
			$donvisanxuat->id = $dvsx['id_parent']; $parent = $donvisanxuat->get_one();
			echo '<b>' .$dvsx['ten'] . ' - ' . $parent['ten'] .'</b>';
		}
		?>
		</div>
		
		<div class="cell colspan2 align-right">Ngày gieo</div>
		<div class="cell colspan4"><b>
		<?php
		if(isset($sp['ngaygieo']) && $sp['ngaygieo']){
			echo date("d/m/Y", $sp['ngaygieo']->sec);
		}
		?></b>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Diện tích gieo trồng</div>
		<div class="cell colspan4"><b><?php echo format_number($sp['dientich']); ?>m<sup>2</sup> </b></div>
		<div class="cell colspan2 align-right">Ngày dự kiến thu hoạch</div>
		<div class="cell colspan4"><b>
		<?php
		if(isset($sp['ngaydukienthuhoach']) && $sp['ngaydukienthuhoach']){
			echo date("d/m/Y", $sp['ngaydukienthuhoach']->sec);
		}
		?></b>
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Ngày thu hoạch</div>
		<div class="cell colspan4"><b>
		<?php
		if(isset($sp['ngaythuhoach']) && $sp['ngaythuhoach']){
			echo date("d/m/Y", $sp['ngaythuhoach']->sec);
		}
		?>
		</b></div>
		<div class="cell colspan2 align-right">Sản lượng</div>
		<div class="cell colspan4"><b><?php echo format_number($sp['sanluong']); ?>kg</b></div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Đơn vị sơ chế</div>
		<div class="cell colspan4">
		<?php
		if(isset($sp['id_donvisoche']) && $sp['id_donvisoche']){
			$donvisoche->id = $sp['id_donvisoche']; $dvsc = $donvisoche->get_one();
			echo '<b>' .$dvsc['ten'] .'</b>';
		}
		?>
		</div>
		
		<div class="cell colspan2 align-right">Qui cách đóng gói</div>
		<div class="cell colspan4"><b><?php echo $sp['quicachdonggoi']; ?></b></div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Hướng dẫn sử dụng</div>
		<div class="cell colspan4"><b><?php echo $sp['huongdansudung']; ?></b></div>
		<div class="cell colspan2 align-right">Hướng dẫn bảo quản</div>
		<div class="cell colspan4"><b><?php echo $sp['huongdanbaoquan']; ?></b></div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Đơn vị kinh doanh</div>
		<div class="cell colspan10"><b>
		<?php
		if(isset($sp['id_donvikinhdoanh']) && $sp['id_donvikinhdoanh']){
			$arr_donvikinhdoanh = array();
			foreach ($sp['id_donvikinhdoanh'] as $key => $value) {
				if($value) array_push($arr_donvikinhdoanh, new MongoId($value));
			}
			$query = array('_id' => array('$in' => $arr_donvikinhdoanh));
			$donvikinhdoanh_list = $donvikinhdoanh->get_list_condition($query);
			if($donvikinhdoanh_list){
				foreach($donvikinhdoanh_list as $dvkd){
					echo '<span class="mif-shop fg-blue"></span> '. $dvkd['ten'] . '&nbsp;&nbsp;&nbsp;';
				}
			}
		}
		?>
		</b></div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Ghi chú</div>
		<div class="cell colspan10"><b><?php echo $sp['ghichu']; ?></b></div>
	</div>
	<div class="row cells12">
		<div class="cell colspan2 align-right">Hình ảnh</div>
		<div class="cell colspan10"><b><?php echo $sp['ghichu']; ?></b></div>
	</div>
	<div class="row cells12">
	<?php
	if(isset($sp['hinhanh']) && $sp['hinhanh']){
		foreach ($sp['hinhanh'] as $key => $value) {
			echo '<div class="row" style="width:15%; float:left; margin:0 0 3% 3%;">
                <div class="image-container">
                    <div class="frame"><a href="'.$target_images.$value['aliasname'].'" class="colorbox"><img src="'.$target_images.$value['aliasname'].'"></a></div>
                </div>
            </div>';
		}
	}
	?>
	</div>
	<div class="row cells12">
		<div class="cell colspan12"><h3>Thông tin chi tiết quá trình</h3></div>
	</div>
	<div class="row cells12">
		<div class="cell colspan12">
			<a href="vanchuyen.html?id=<?php echo $id; ?>" class="button primary place-right"><span class="mif-truck"></span> Thêm vận chuyển</a>
			<a href="phunthuoc.html?id=<?php echo $id; ?>" class="button success place-right" style="margin-right:5px;"><span class="mif-weather5"></span> Thêm phun thuốc</a>
			<a href="bonphan.html?id=<?php echo $id; ?>" class="button danger place-right" style="margin-right:5px;"><span class="mif-water"></span> Thêm bón phân</a>	
		</div>
	</div>
	<div class="row cells12">
		<div class="cell colspan12">
			<div class="tabcontrol2" data-role="tabcontrol">
			    <ul class="tabs">
			        <li><a href="#bonphan"><span class="mif-water"></span> Bón phân</a></li>
			        <li><a href="#phunthuoc"><span class="mif-weather5"></span> Phun thuốc</a></li>
			        <li><a href="#vanchuyen"><span class="mif-truck"></span> Vận chuyển</a></li>
			    </ul>
			    <div class="frames">
			        <div class="frame" id="bonphan">
			        	Bón phân
			        </div>
			        <div class="frame" id="phunthuoc">
			        <?php if(isset($sp['phunthuoc']) && $sp['phunthuoc']) :?>
			        	<table class="table border bordered striped hovered">
			        		<thead>
			        			<tr>
			        				<th>STT</th>
			        				<th>Ngày thực hiện</th>
			        				<th>Tên thuốc</th>
			        				<th>Liều lượng</th>
			        				<th>Người thực hiện</th>
			        				<th style="text-align:center;"><span class="mif-bin"></span></th>
			        			</tr>
			        		</thead>
			        		<tbody>
			        		<?php
			        		$thuoc = new Thuoc();
			        		$i = 1;
			        		foreach($sp['phunthuoc'] as $k => $pt){
			        			$thuoc->id = $pt['id_thuoc']; $t = $thuoc->get_one();
			        			echo '<tr>
			        				<td>'.$i.'</td>
			        				<td>'.date("d/m/Y", $pt['ngaythuchien']->sec).'</td>
			        				<td>'.$t['ten'].'</td>
			        				<td>'.$pt['lieuluong'].'</td>
			        				<td>'.$pt['nguoithuchien'].'</td>
			        				<td class="align-center"><a href="get.xoaphunthuoc.html?id='.$id.'&id_phunthuoc='.$pt['_id'].'"><span class="mif-bin"></span></a></td>
			        			</tr>';$i++;
			        		}
			        		?>
			        		</tbody>
			        	</table>
			        <?php endif; ?>

			        </div>
			        <div class="frame" id="vanchuyen">
			        	Vận chuyển
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php require_once('footer.php'); ?>