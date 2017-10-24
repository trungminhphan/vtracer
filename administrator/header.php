<?php
function __autoload($class_name) {
    require_once('cls/class.' . strtolower($class_name) . '.php');
}
$session = new SessionManager();
$users = new Users();
require_once('inc/functions.inc.php');
require_once('inc/config.inc.php');
if(!$users->isLoggedIn()){ transfers_to('./login.php?url=' . $_SERVER['REQUEST_URI']); }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Hệ thống Quản lý Truy xuất nguồn gốc Nông sản.">
    <meta name="keywords" content="Hệ thống Quản lý Truy xuất nguồn gốc Nông sản">
    <meta name="author" content="Trung tâm Tin học Trường Đai học An Giang, 18 Ung Văn Khiêm, Tp Long Xuyên, An Giang">
    <link rel='shortcut icon' type='image/x-icon' href="images/favicon.ico" />
    <title>Hệ thống quản lý truy xuất nguồn gốc Nông Sản - VTRACER</title>
    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
</head>
<body>
<div class="app-bar" data-role="appbar">
    <a href="index.html" class="app-bar-element branding"><span class="mif-home mif-2x"></span></a>
    <ul class="app-bar-menu small-dropdown">
        <?php if($users->is_admin()) : ?>
        <li><a href="#" class="dropdown-toggle"><span class="mif-apps mif-2x"></span>&nbsp;&nbsp;Danh mục</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="diachi.html"><span class="mif-earth"></span>&nbsp;&nbsp;Địa chỉ</a></li>
                <li class="divider"></li>
                <li><a href="donvikinhdoanh.html"><span class="mif-cart"></span>&nbsp;&nbsp;Đơn vị Kinh doanh</a></li>
                <li class="divider"></li>
                <li><a href="donvisanxuat.html"><span class="mif-cogs"></span>&nbsp;&nbsp;Đơn vị sản xuất</a></li>
                <li class="divider"></li>
                <li><a href="donvisoche.html"><span class="mif-dropbox"></span>&nbsp;&nbsp;Đơn vị Sơ chế</a></li>
                <li class="divider"></li>
                <li><a href="loainongsan.html"><span class="mif-tree"></span>&nbsp;&nbsp;Loại Nông sản</a></li>
                <li class="divider"></li>
                <li><a href="phanbon.html"><span class="mif-water"></span>&nbsp;&nbsp;Phân bón</a></li>
                <li class="divider"></li>
                <li><a href="thuoc.html"><span class="mif-weather5"></span>&nbsp;&nbsp;Thuốc</a></li>
                <li class="divider"></li>
            </ul>
        </li>
        <?php endif; ?>
        <li><a href="#" class="dropdown-toggle"><span class="mif-shopping-basket mif-2x"></span>&nbsp;&nbsp;Nông sản</a> 
            <ul class="d-menu" data-role="dropdown">
                <li><a href="nongsanmoigieo.html"><span class="mif-sun"></span>&nbsp;&nbsp;Nông sản mới gieo</a></li>
                <li class="divider"></li>
                <li><a href="nongsanchokiemduyet.html"><span class="mif-widgets"></span>&nbsp;&nbsp;Nông sản chờ kiểm duyệt</a></li>
                <li class="divider"></li>
                <li><a href="nongsandakiemduyet.html"><span class="mif-checkmark"></span>&nbsp;&nbsp;Nông sản đã kiểm duyệt</a></li>
            </ul>
        </li>
        <li><a href="timkiem.html"><span class="mif-search mif-2x"></span> Tìm kiếm</a></li>
        <li><a href="#" class="dropdown-toggle"><span class="mif-users mif-2x"></span>&nbsp;&nbsp;Tài khoản</a>
            <ul class="d-menu" data-role="dropdown">
                <?php if($users->is_admin()): ?>
                    <li><a href="users.html"><span class="mif-user"></span>&nbsp;&nbsp;Quản lý tài khoản</a></li>
                    <li class="divider"></li>
                <?php endif; ?>
                <li><a href="logout.html"><span class="mif-exit"></span>&nbsp;&nbsp;Đăng xuất</a></li>
                <li class="divider"></li>
            </ul>
        </li>
    </ul>
</div>
<div class="container page-content">