<?php
require_once('header.php'); 
check_permis(!$users->is_admin());
$donvisanxuat = new DonViSanXuat();
$id = isset($_GET['id']) ? $_GET['id'] :'';
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$id_root = isset($_GET['id_root']) ? $_GET['id_root'] : '';
$list_root = $donvisanxuat->get_list_root();
?>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if(isset($msg) && $msg): ?>
			$.Notify({type: 'alert', caption: 'Thông báo', content: <?php echo "'".$msg."'"; ?>});
		<?php endif; ?>
	});
</script>
<h1><a href="index.html" class="nav-button transform"><span></span></a>&nbsp;Quản lý Đơn vị sản xuất</h1>
<a href="themdonvisanxuat.html?id_root=<?php echo $id_root; ?>" class="button primary"><span class="mif-plus"></span> Thêm mới</a>
<?php if($list_root) : ?>
<div class="treeview" data-role="treeview">
	<ul>
	<?php
    foreach ($list_root as $key => $root) {
        $donvisanxuat->id_parent = $root['_id'];
        $child_list_1 = $donvisanxuat->get_child_list();
        //collapsed
        echo '<li class="node '.($root['_id'] == $id_root ? ' expand' : 'collapsed').'">';
        echo '<span class="leaf">'.$root['ten'].'</span><a href="themdonvisanxuat.html?id='.$root['_id'].'&id_root='.$root['_id'].'&act=del" onclick="return confirm(\'Chắc chắn xóa?\');"><span class="mif-bin"></span></a>&nbsp;&nbsp;&nbsp;<a href="themdonvisanxuat.html?id='.$root['_id'].'&act=edit"><span class="mif-pencil"></span></a>&nbsp;&nbsp;&nbsp;<a href="themdonvisanxuat.html?id_parent='.$root['_id'].'"><span class="mif-plus"></span></a>&nbsp;&nbsp;&nbsp;<a href="chitietdonvisanxuat.html?id='.$root['_id'].'&id_root='.$root['_id'].'"><span class="mif-enlarge"></span></a>';
        echo '<span class="node-toggle"></span>';
        if($child_list_1 && $child_list_1->count() > 0){
            echo '<ul>';
            foreach($child_list_1 as $child_1){
                echo '<li><span class="leaf"><span class="mif-chevron-right"></span>'.$child_1['ten'].'</span><a href="themdonvisanxuat.html?id='.$child_1['_id'].'&id_root='.$root['_id'].'&id_parent='.$root['_id'].'&act=del" onclick="return confirm(\'Chắc chắn xóa?\');"><span class="mif-bin"></span></a>&nbsp;&nbsp;&nbsp;<a href="themdonvisanxuat.html?id='.$child_1['_id'].'&act=edit"><span class="mif-pencil"></span></a>&nbsp;&nbsp;&nbsp;<a href="chitietdonvisanxuat.html?id='.$child_1['_id'].'&id_root='.$root['_id'].'"><span class="mif-enlarge"></span></a>';
                echo '</li>';
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