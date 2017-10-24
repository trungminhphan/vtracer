<?php
require_once('header.php'); 
check_permis(!$users->is_admin());

$loainongsan = new LoaiNongSan();
//$loainongsan_list = $loainongsan->get_all_list();
$roots_list = $loainongsan->get_roots();
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
?>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if(isset($msg) && $msg): ?>
			$.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'".$msg."'"; ?>});
		<?php endif; ?>
	});
</script>
<h1><a href="index.html" class="nav-button transform"><span></span></a>&nbsp;Quản lý Loại Nông Sản</h1>
<a href="themloainongsan.html" class="button primary"><span class="mif-plus"></span> Thêm mới</a>
<?php if($roots_list && $roots_list->count() > 0) : ?>
<div class="treeview" data-role="treeview">
<ul>
    <?php
    foreach ($roots_list as $key => $root) {
        $loainongsan->id_parent = $root['_id'];
        $child_list = $loainongsan->get_child_list();
        //collapsed
        echo '<li class="node">';
        echo '<span class="leaf">'.$root['ten'].'</span>&nbsp;&nbsp;&nbsp;<a href="themloainongsan.html?id='.$root['_id'].'&act=del" onclick="return confirm(\'Chắc chắn xóa?\');"><span class="mif-bin"></span></a>&nbsp;&nbsp;&nbsp;<a href="themloainongsan.html?id='.$root['_id'].'&act=edit"><span class="mif-pencil"></span></a>&nbsp;&nbsp;&nbsp;<a href="themloainongsan.html?id_parent='.$root['_id'].'"><span class="mif-plus"></span></a>';
        echo '<span class="node-toggle"></span>';
        if($child_list){
            echo '<ul>';
            foreach($child_list as $child){
                echo '<li><span class="leaf"><span class="mif-chevron-right"></span> '.$child['ten'].'</span>&nbsp;&nbsp;&nbsp;<a href="themloainongsan.html?id='.$child['_id'].'&act=del" onclick="return confirm(\'Chắc chắn xóa?\');"><span class="mif-bin"></span></a>&nbsp;&nbsp;&nbsp;<a href="themloainongsan.html?id='.$child['_id'].'&act=edit"><span class="mif-pencil"></span></a></li>';
                //echo '<li><span class="leaf"><span class="icon mif-chevron-right"></span> '.$child['ten'].'</span> Xóa Sửa</li>';
            }
            echo '</ul>';
        }
        echo '</li>';
    }
?>
</ul>
</div>
<?php endif; ?>

<?php require_once('footer.php'); ?>