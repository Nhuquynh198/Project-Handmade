<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <?php echo validation_errors(); ?>
        </div>
    </div>
</div>

<form class="form-horizontal" action="<?=site_url('khachhang/edit/'.$kh->MKH)?>" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="Ho_khach_hang">Họ khách hàng:</label>
    <div class="col-sm-10">
      <input type="text" name="Ho_khach_hang" class="form-control" id="Ho_khach_hang" placeholder="Nhập họ của khách hànng" value="<?=$kh->ho_khach_hang; ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="Ten_khach_hang">Tên khách hàng:</label>
    <div class="col-sm-10"> 
      <input type="text" name="Ten_khach_hang" class="form-control" id="Ten_khach_hang" placeholder="Nhập tên khách hàng" value="<?=$kh->ten_khach_hang; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="Dien_thoai">Điện thoại:</label>
    <div class="col-sm-10"> 
      <input type="text" name="Dien_thoai" class="form-control" id="Dien_thoai" placeholder="Nhập số điện thoại" value="<?=$kh->dien_thoai; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="Email">Email:</label>
    <div class="col-sm-10"> 
      <input type="text" name="Email" class="form-control" id="Email" placeholder="Nhập Email" value="<?=$kh->email; ?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="Dia_chi">Địa chỉ:</label>
    <div class="col-sm-10"> 
      <textarea name="Dia_chi" class="form-control" id="Dia_chi" ><?=$kh->dia_chi?></textarea>      
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="btnSave" id="btnSave">Lưu</button>
    </div>
  </div>
</form>