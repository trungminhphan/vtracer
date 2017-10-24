<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');
function __autoload($classname){
	require_once('../administrator/cls/class.' . strtolower($classname) . '.php');
}
require_once('inc/config.inc.php');
$loainongsan = new LoaiNongSan();
$loainongsan_list = $loainongsan->get_roots();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Hệ thống tra cứu nguồn gốc sản phẩm | Sở Công Thương tỉnh An Giang</title>
	<!-- Favicon -->
	<link rel='shortcut icon' type='image/x-icon' href="images/fav-icon/favicon.png" />
	<!-- Custom Css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<!-- Fixing Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<div class="main_page">
		<!-- Header *******************************  -->
		<header>
			<div class="bottom_header">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-12 col-xs-12 logo-responsive">
							<div class="logo-area">
								<a href="index.html" class="pull-left logo"><img src="images/logo/logo.png" alt="LOGO"></a>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12">
							<div class="search-box">
								<form action="#" class="clearfix">
									<input type="text" placeholder="Nhập mã sản phẩm tra cứu...">
									<button><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
						<div class="col-md-4 col-sm-12 col-xs-12" id="logo_right">
							<img src="images/logo/logo_right.png" />
						</div>
					</div>
				</div>
			</div> <!-- End of .bottom_header -->
		</header>
		<!-- Menu ******************************* -->
		<div class="theme_menu color1_bg">
			<div class="container">
				<nav class="menuzord pull-left" id="main_menu">
				   <ul class="menuzord-menu">
				      <li class="current_page"><a href="index.html">Trang chủ</a></li>
				      <li><a href="#">Giới thiệu</a>
				      	<ul class="dropdown">
				            <li><a href="thong-tin-chung.html">Thông tin chung</a></li>
				            <li><a href="qui-trinh-quan-ly.html">Qui trình quản lý</a></li>
				            <li><a href="bieu-mau-dang-ky">Biểu mẫu đăng ký</a></li>
				            <li><a href="qui-trinh-san-xuat.html">Qui trình sản xuất</a></li>
				         </ul>
				      </li>
				      <li><a href="#">Sản phẩm</a>
				      	<?php
				      	if($loainongsan_list){
				      		echo '<ul class="dropdown">';
				      		foreach($loainongsan_list as $lns){
				      			echo '<li><a href="sanpham.html?id='.$lns['_id'].'">'.$lns['ten'].'</a></li>';
				      		}
				      		echo '</ul>';
				      	}
				      	?>
				      </li>
				      <li><a href="#">Các đơn vị tham gia</a>
				      	<ul class="dropdown">
				            <li><a href="donvisanxuat.html">Đơn vị sản xuất</a></li>
				            <li><a href="donvikinhdoanh.html">Đơn vị kinh doanh</a></li>
				            <li><a href="donviphanphoi.html">Đơn vị phân phối</a></li>
				         </ul>
				      </li>
				      <li><a href="#">Tin tức</a>
				      	<ul class="dropdown">
				            <li><a href="tintuc.html">Thông báo</a></li>
				            <li><a href="tintuc.html">Thông tin thị trường</a></li>
				            <li><a href="tintuc.html">Thông tin nông sản</a></li>
				         </ul>
				      </li>
				      <li><a href="hoidap.html">Hỏi/Đáp</a></li>
				      <li><a href="lienhe.html">Liên hệ</a></li>
				   </ul> <!-- End of .menuzord-menu -->
			   </nav> <!-- End of #main_menu -->
			   <!-- ******* Cart And Search Option ******** -->
			   <div class="nav_side_content pull-right">
			   		<ul class="icon_header">
						<li class="border_round tran3s"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="border_round tran3s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
			   </div> <!-- End of .nav_side_content -->
		   </div> <!-- End of .conatiner -->
		</div> <!-- End of .theme_menu -->