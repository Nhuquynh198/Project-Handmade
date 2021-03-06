<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <?php echo validation_errors(); ?>
        </div>
    </div>
</div>

<form class="form-horizontal" action="<?=site_url('sanpham/edit/'.$sanpham->ma_san_pham)?>" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="MCL">Mã chủng loại sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" name="MCL" class="form-control" id="MCL" placeholder="Nhập mã chủng loại cho sản phẩm" value="<?=$sanpham->MCL; ?>">
    </div>
  </div>	
    
  <div class="form-group">
    <label class="control-label col-sm-2" for="Ten_san_pham">Tên sản phẩm:</label>
    <div class="col-sm-10">
      <input type="text" name="Ten_san_pham" class="form-control" id="Ten_san_pham" placeholder="Nhập tên sản phẩm" value="<?=$sanpham->ten_san_pham; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-10"></div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="Gia_ban">Giá bán:</label>
    <div class="col-sm-10"> 
      <input type="text" name="Gia_ban" class="form-control" id="Gia_ban" placeholder="Nhập giá bán" value="<?=$sanpham->gia_ban; ?>">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="btnSave" id="btnSave">Lưu</button>
    </div>
  </div>
</form>