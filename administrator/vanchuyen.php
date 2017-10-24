<?php
require_once('header.php');
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>
<h1><a href="chitietnongsan.html?id=<?php echo $id; ?>" class="nav-button transform"><span></span></a>&nbsp;Thêm thông tin Vận chuyển</h1>
<?php require_once('footer.php'); ?>
