<?php
require_once('header.php');
check_permis(!$users->is_admin());
$donvikinhdoanh = new DonViKinhDoanh();
$diachi = new DiaChi();
$donvikinhdoanh_list = $donvikinhdoanh->get_all_list();
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
?>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        $(".link").click(function(){
            var _link = $(this).attr("href");
            window.location = _link;
        });
		<?php if(isset($msg) && $msg): ?>
			$.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'".$msg."'"; ?>});
		<?php endif; ?>
	});
</script>
<h1><a href="index.html" class="nav-button transform"><span></span></a>&nbsp;Quản lý Đơn vị Kinh doanh</h1>
<a href="themdonvikinhdoanh.html" class="button primary"><span class="mif-plus"></span> Thêm mới</a>
<?php if($donvikinhdoanh_list->count() > 0) : ?>
<table class="dataTable striped border bordered hovered" data-role="datatable">
<thead>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
    </tr>
</thead>
<tbody>
    <?php
    $i = 1;
    foreach ($donvikinhdoanh_list as $dvkd) {
        echo '<tr href="chitietdonvikinhdoanh.html?id='.$dvkd['_id'].'" class="link" style="cursor:pointer;">';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$dvkd['ten'].'</td>';
        echo '<td>'.$diachi->get_diachi($dvkd['diachi']).'</td>';
        echo '<td>'.$dvkd['dienthoai'].'</td>';
        echo '</tr>'; $i++;
    }
    ?>
</tbody>
<tfoot>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Địa chỉ</th>
        <th>Điện thoại</th>
    </tr>
</tfoot>
</table>
<?php endif; ?>

<?php require_once('footer.php'); ?>