<?php
require_once('header.php');
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$sanpham = new SanPham();$donvisanxuat = new DonViSanXuat();
$sanpham_list = $sanpham->get_list_moigieo();
?>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if(isset($msg) && $msg): ?>
			$.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'".$msg."'"; ?>});
		<?php endif; ?>
	});
</script>
<h1><a href="index.html" class="nav-button transform"><span></span></a>&nbsp;Quản lý nông sản mới đăng ký</h1>
<a href="themnongsanmoigieo.html" class="button primary"><span class="mif-plus"></span> Thêm mới</a>
<?php if($sanpham_list) : ?>
<table class="dataTable striped border bordered hovered" data-role="datatable">
	<thead>
		<tr>
			<th>STT</th>
			<th>Mã sản phẩm</th>
			<th>Tên sản phẩm</th>
			<th style="text-align:center">Ngày gieo</th>
			<th style="text-align:center">Đơn vị sản xuất</th>
			<th style="text-align:center"><span class="mif-bin"></span></th>
			<th style="text-align:center"><span class="mif-pencil"></span></th>
		</tr>
	</thead>
	<tbody>
	<?php
	$i = 1;
	foreach($sanpham_list as $sp){
		if($sp['ngaygieo']) $ngaygieo = date("d/m/Y", $sp['ngaygieo']->sec);
		else $ngaygieo = '';
		if($sp['id_donvisanxuat']){
			$donvisanxuat->id = $sp['id_donvisanxuat']; $dvsx = $donvisanxuat->get_one();
			$donvisanxuat->id = $dvsx['id_parent']; $parent = $donvisanxuat->get_one();
			$tendonvisanxuat = $dvsx['ten'] . ' - ' . $parent['ten'];
		} else {
			$tendonvisanxuat = '';
		}
		echo '<tr>
			<td>'.$i.'</td>
			<td><a href="chitietnongsan.html?id='.$sp['_id'].'">'.$sp['masanpham'].'</a></td>
			<td>'.$sp['ten'].'</td>
			<td class="align-center">'.$ngaygieo.'</td>
			<td class="align-center">'.$tendonvisanxuat.'</td>
			<td class="align-center"><a href="themnongsanmoigieo.html?id='.$sp['_id'].'&act=del" onclick="return confirm(\'Chắc chắn muốn xoá?\')"><span class="mif-bin"></span></a></td>
			<td class="align-center"><a href="themnongsanmoigieo.html?id='.$sp['_id'].'&act=edit"><span class="mif-pencil"></span></a></td>
		</tr>';$i++;
	}
	?>
	</tbody>
</table>
<?php endif; ?>
<?php require_once('footer.php'); ?>