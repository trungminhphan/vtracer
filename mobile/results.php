<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
?>
<div data-page="ketquatracuu" class="page navbar-fixed">
  <div class="navbar ">
    <div class="navbar-inner">
      <div class="left sliding"><a href="index.html" class="back link"><i class="icon icon-back"></i></a></div>
      <div class="center">Kết quả tra cứu</div>
      <div class="right"><a href="#" class="open-panel link icon-only"><i class="icon icon-bars"></i></a></div>
    </div>
  </div>
  <div class="page-content hide-bars-on-scroll">
    Kết quả tra cứu: <b><?php echo $id; ?></b>
  </div>
</div>