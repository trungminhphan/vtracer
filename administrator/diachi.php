<?php
require_once('header.php');
check_permis(!$users->is_admin());
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$id_root = isset($_GET['id_root']) ? $_GET['id_root'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$diachi = new DiaChi();
$roots_list = $diachi->get_roots();
?>
<script type="text/javascript">
	$(document).ready(function(){
		$(".add").click(function(){
			var dialog = $("#dialog_diachi").data('dialog');
			var _link = $(this).attr("href");
			$.get(_link, function(data){
				$("#dialog_diachi").html(data);
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
<h1><a href="index.html" class="nav-button transform"><span></span></a>&nbsp;Quản lý Danh mục địa chỉ</h1>
<a href="get.themdiachi.html" class="add button primary" onclick="return false;"><span class="mif-plus"></span> Thêm mới</a>
<?php if($roots_list) : ?>
<div class="treeview" data-role="treeview">
<ul>
    <?php
    foreach ($roots_list as $key => $root) {
        $diachi->id_parent = $root['_id'];
        $child_list_1 = $diachi->get_child_list();
        //collapsed
        echo '<li class="node '.($root['_id'] == $id_root ? ' expand' : 'collapsed').'">';
        echo '<span class="leaf">'.$root['ten'].'</span><a href="get.themdiachi.html?id='.$root['_id'].'&id_root='.$root['_id'].'&act=del" onclick="return confirm(\'Chắc chắn xóa?\');"><span class="mif-bin"></span></a>&nbsp;&nbsp;&nbsp;<a href="get.themdiachi.html?id='.$root['_id'].'&act=edit" class="add" onclick="return false;"><span class="mif-pencil"></span></a>&nbsp;&nbsp;&nbsp;<a href="get.themdiachi.html?id_parent='.$root['_id'].'&level=1" class="add" onclick="return false;"><span class="mif-plus"></span></a>';
        echo '<span class="node-toggle"></span>';
        if($child_list_1 && $child_list_1->count() > 0){
            echo '<ul>';
            foreach($child_list_1 as $child_1){
            	$diachi->id_parent = $child_1['_id'];
            	$child_list_2 = $diachi->get_child_list();
                echo '<li class="node '.($child_1['_id'] == $id ? ' expand' : 'collapsed').'"><span class="leaf">'.$child_1['ten'].'</span><a href="get.themdiachi.html?id='.$child_1['_id'].'&id_root='.$root['_id'].'&id_parent='.$root['_id'].'&act=del" onclick="return confirm(\'Chắc chắn xóa?\');"><span class="mif-bin"></span></a>&nbsp;&nbsp;&nbsp;<a href="get.themdiachi.html?id='.$child_1['_id'].'&act=edit&level=1" class="add" onclick="return false;"><span class="mif-pencil"></span></a>&nbsp;&nbsp;&nbsp;<a href="get.themdiachi.html?id_parent='.$child_1['_id'].'&level=2" class="add" onclick="return false;"><span class="mif-plus"></span></a>';
                echo '<span class="node-toggle"></span>';
                if($child_list_2 && $child_list_2->count() > 0){
            		echo '<ul>';
            		foreach($child_list_2 as $child_2){
            			echo '<li><span class="leaf"><span class="mif-chevron-right"></span> '.$child_2['ten'].'</span><a href="get.themdiachi.html?id='.$child_2['_id'].'&id_root='.$root['_id'].'&id_parent='.$child_1['_id'].'&act=del" onclick="return confirm(\'Chắc chắn xóa?\');"><span class="mif-bin"></span></a>&nbsp;&nbsp;&nbsp;<a href="get.themdiachi.html?id='.$child_2['_id'].'&act=edit&level=2" class="add" onclick="return false;"><span class="mif-pencil"></span></a>';
            		}
            		echo '</ul>';    	
                }
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
<div data-role="dialog" id="dialog_diachi" class="padding20" data-close-button="true" data-width="600">
</div>
<?php require_once('footer.php'); ?>