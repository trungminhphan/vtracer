<?php
require_once('header.php'); 
check_permis(!$users->is_admin());
$donvisoche = new DonViSoChe();$diachi = new DiaChi();
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$donvisoche_list = $donvisoche->get_all_list();

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
<h1><a href="index.html" class="nav-button transform"><span></span></a>&nbsp;Quản lý Đơn vị sản xuất</h1>
<a href="themdonvisoche.html" class="button primary"><span class="mif-plus"></span> Thêm mới</a>
<?php if($donvisoche_list) : ?>
<table class="table border bordered striped hovered dataTable" data-role="datatable">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên đơn vị</th>
            <th>Người đại diện</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
        </tr>
    </thead>
    <tbody>
    <?php
    $i = 1;
    foreach ($donvisoche_list as $dvsc) {
        echo '<tr href="chitietdonvisoche.html?id='.$dvsc['_id'].'" class="link" style="cursor:pointer;">
            <td>'.$i.'</td>
            <td>'.$dvsc['ten'].'</td>
            <td>'.$dvsc['nguoidaidien'].'</td>
            <td>'.$diachi->get_diachi($dvsc['diachi']).'</td>
            <td>'.$dvsc['dienthoai'].'</td>
        </tr>'; $i++;
    }
    ?>
    </tbody>
    <tfoot>
        <tr>
            <th>STT</th>
            <th>Tên đơn vị</th>
            <th>Người đại diện</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
        </tr>
    </tfoot>
</table>
<?php endif;?>
<?php require_once('footer.php'); ?>