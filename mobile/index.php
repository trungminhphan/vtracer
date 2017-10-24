<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="theme-color" content="#2196f3">
<title>VTracer - Truy xuất nguồn gốc sản phẩm | Sở Công Thương An Giang</title>
<!-- Font embedding link goes here -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Suez+One" rel="stylesheet">
<!-- CSS link goes here -->
<link rel="stylesheet" href="css/framework7.material.min.css">
<link rel="stylesheet" href="css/framework7.material.colors.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/swipebox.min.css">
<link rel="stylesheet" href="css/maxframes.css">
</head>
<body class="theme-green gradient">
<div class="statusbar-overlay"></div>
<div class="panel-overlay"></div>
<div class="panel panel-left panel-reveal sidebar">
  <div class="view">
    <div class=" ">
      <div data-page="panel-left" class="sidemenu leftmenusmall ">
        <div class="item-content userprofile">
            <div class="item-media"><img src="img/pic1.png" width="44"/></div>
            <div class="item-inner">
              <div class="item-title-row">
                <div class="item-title">Truy xuất nguồn gốc sản phẩm</div>
              </div>
            </div>
        </div>
        <div class="page-content">
            <div class="list-block accordion-list">
              <ul class="menu">
                <li class="accordion-item">
                    <a href="gioithieu.html" class="item-content close-panel">
                    <div class="item-inner">
                      <div class="item-title"><i class="fa fa-bell"></i>Giới thiệu</div>
                    </div></a>
                </li>
                <li class="accordion-item">
                    <a href="capnhatsanpham.html" class="item-content close-panel">
                    <div class="item-inner">
                      <div class="item-title"><i class="fa fa-cogs"></i>Cập nhật sản phẩm</div>
                    </div></a>
                </li>
                <li class="accordion-item">
                    <a href="lichsutracuu.html" class="item-content close-panel">
                    <div class="item-inner">
                      <div class="item-title"><i class="fa fa-history"></i>Lịch sử tra cứu</div>
                    </div></a>
                </li>
                <li class="accordion-item">
                    <a href="donvikinhdoanh.html" class="item-content close-panel">
                    <div class="item-inner">
                      <div class="item-title"><i class="fa fa-shopping-basket"></i>Siêu thị, cửa hàng</div>
                    </div></a>
                </li>
                <li class="accordion-item">
                    <a href="donvisanxuat.html" class="item-content close-panel">
                    <div class="item-inner">
                      <div class="item-title"><i class="fa fa-envira"></i>Đơn vị sản xuất</div>
                    </div></a>
                </li>
                
                
              </ul>
			   </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="views pageview" >
  <div class="view view-main">
    <div class="pages">
          <div data-page="index" class="page">
            <div class="page-content">
            <div class="navbar ">
              <div class="navbar-inner">
                  <div class="left sliding"><a href="#" data-panel="left" class="open-panel link icon-only"><i class="fa fa-bars"></i></a></div>
                  <div class="center ">VTracer</div>
                  <!--<div class="right"><a href="#" class="link" onclick="activity.Exit();"><i class="fa fa-sign-out"></i> Thoát</a></div>-->
              </div>
            </div>
            <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST" accept-charset="utf-8">
            <div class="logo main col12"><img src="img/icon.png" alt="" height="120"></div>
            <div class="list-block">
              <ul>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-input">
                      <input class="style login3" type="text" name="username" id="username" placeholder="Tài khoản người dùng" required>
                    </div>
                  </div>
                </li>
                <li class="item-content">
                  <div class="item-inner">
                    <div class="item-input">
                      <input class="style login3" type="password" name="password" id="password" placeholder="Mật khẩu" required>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="content-block">
              <p class="buttons-row">
                <button type="submit" name="submit" class="button button-big button-fill button-raised color-green" id="result_link"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                <!--<button class="button button-big button-fill button-raised color-pink" onclick="activity.startScannerActivity();"><i class="fa fa-qrcode"></i> Quét mã QRCODE</button>-->
              </p>
            </div>
          </form>
            </div>
          </div>
    </div>
  </div>
</div>
<!-- JS link goes here --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/framework7.min.js"></script> 
<script type="text/javascript" src="js/jquery.swipebox.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script> 
<script type="text/javascript" src="js/maxframes.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#masanpham").keyup(function(){
      var key = $(this).val();
      $("#result_link").attr("href", "results.html?id=" + key);
    });
  });
</script>
</body>
</html>