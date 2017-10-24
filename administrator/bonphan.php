<?php
require_once('header.php');
check_permis(!$users->is_admin());
$loainongsan = new LoaiNongSan(); $donvisanxuat = new DonViSanXuat();
$donvisoche = new DonViSoChe(); $donvikinhdoanh = new DonViKinhDoanh();
$sanpham = new SanPham();
$id = isset($_GET['id']) ? $_GET['id'] : '';
$sanpham->id = $id; $sp = $sanpham->get_one();
//array(id_user, id_thuoc, lieuluong, phuongphap, thoigiancachly, ngaythuchien, hinhanh)
?>
<h1><a href="chitietnongsan.html?id=<?php echo $id; ?>" class="nav-button transform"><span></span></a>&nbsp;Thêm thông tin bón phân cho Nông sản</h1>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" data-role="validator" data-show-required-state="false" data-hint-mode="line" data-hint-background="bg-red" data-hint-color="fg-white" data-hide-error="5000" enctype="multipart/form-data" id="themnongsanmoigieo">

</form>
<?php require_once('footer.php'); ?>
