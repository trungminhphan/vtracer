<?php
require_once('header.php');
check_permis(!$users->is_admin());
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$thuoc = new Thuoc();
$thuoc_list = $thuoc->get_all_list();
?>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".add").click(function(){
			var dialog = $("#dialog_thuoc").data('dialog');
			var _link = $(this).attr("href");
			$.get(_link, function(data){
				$("#dialog_thuoc").html(data);
				$("#close_dialog").click(function(){
					dialog.close();
				});
				dialog.open();
			});
		});
		<?php if(isset($msg) && $msg): ?>
			$.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'".$msg."'"; ?>});
		<?php endif; ?>
	});
</script>
<h1><a href="index.html" class="nav-button transform"><span></span></a>&nbsp;Quản lý Danh mục Thuốc bảo vệ Nông sản</h1>
<a href="get.themthuoc.html" class="add button primary" onclick="return false;"><span class="mif-plus"></span> Thêm mới</a>
<?php if($thuoc_list) : ?>
	<table class="table border bordered striped hovered dataTable" data-role="datatable">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên phân</th>
				<th>Thời gian cách ly</th>
				<th>Ghi chú</th>
				<th style="text-align:center;"><span class="mif-bin"></span></th>
				<th style="text-align:center;"><span class="mif-pencil"></span></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i = 1;
		foreach($thuoc_list as $pb){
			echo '<tr>
				<td>'.$i.'</td>
				<td>'.$pb['ten'].'</td>
				<td>'.$pb['thoigiancachly'].' ngày</td>
				<td>'.$pb['ghichu'].'</td>
				<td class="align-center"><a href="get.themthuoc.html?id='.$pb['_id'].'&act=del" onclick="return confirm(\'Chắc chắn muốn xoá?\')"><span class="mif-bin"></span></a></td>
				<td class="align-center"><a href="get.themthuoc.html?id='.$pb['_id'].'&act=edit" onclick="return false;" class="add"><span class="mif-pencil"></span></a></td>
			</tr>'; $i++;
		}
		?>
		</tbody>
	</table>
<?php endif; ?>
<div data-role="dialog" id="dialog_thuoc" class="padding20" data-close-button="true" data-width="600">
</div>
<?php require_once('footer.php'); ?>
