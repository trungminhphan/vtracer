<div data-page="timkiem" class="page">
  <div class="page-content">
  <div class="navbar ">
    <div class="navbar-inner">
        <div class="left sliding"><a href="#" data-panel="left" class="open-panel link icon-only"><i class="fa fa-bars"></i></a></div>
        <div class="center ">VTracer</div>
        <div class="right"><a href="#" class="link" onclick="activity.Exit();"><i class="fa fa-sign-out"></i> Thoát</a></div>
    </div>
  </div>
  <div class="logo main col12"><img src="img/icon.png" alt="" height="120"></div>
  <div class="list-block">
    <ul>
      <li class="item-content">
        <div class="item-inner">
          <div class="item-input">
            <input class="style login3" type="text" name="masanpham" id="masanpham" placeholder="Mã sản phẩm tra cứu">
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="content-block">
    <p class="buttons-row">
      <a href="#" class="button button-big button-fill button-raised color-green" id="result_link"><i class="fa fa-search"></i> Tìm kiếm</a>
      <button class="button button-big button-fill button-raised color-pink" onclick="activity.startScannerActivity();"><i class="fa fa-qrcode"></i> Quét mã QRCODE</button>
    </p>
  </div>
  </div>
</div>