<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissable">
            <?php echo validation_errors(); ?>
        </div>
    </div>
</div>

<form class="form-horizontal" action="<?=site_url('tintuc/edit/'.$tt->MTT)?>" method="post">


  <div class="form-group">
    <label class="control-label col-sm-2" for="tieu_de">Tieu de:</label>
    <div class="col-sm-10">
      <input type="text" name="tieu_de" class="form-control" id="tieu_de" placeholder="Nhập tieu de" value="<?=$tt->tieu_de; ?>">
    </div>
  </div>
  
    <div class="form-group">
    <label class="control-label col-sm-2" for="ngay_cap_nhat">Ngay  cap nhat:</label>
    <div class="col-sm-10"> 
      <input type="text" name="ngay_cap_nhat" class="form-control" id="ngay_cap_nhat" placeholder="Nhập ngay  cap nhat" value="<?=$tt->ngay_cap_nhat;?>">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="nd_cap_nhat">Noi dung cap nhat:</label>
    <div class="col-sm-10"> 
      <input type="text" name="nd_cap_nhat" class="form-control" id="nd_cap_nhat" placeholder="Nhập nd cap nhat" value="<?=$tt->nd_cap_nhat; ?>">
    </div>
  </div>
  

  
    <div class="form-group">
    <label class="control-label col-sm-2" for="y_kien_phan_hoi">Y kien phan hoi:</label>
    <div class="col-sm-10"> 
      <input type="text" name="y_kien_phan_hoi" class="form-control" id="y_kien_phan_hoi" placeholder="Nhập Y kien phan hoi" value="<?=$tt->y_kien_phan_hoi; ?>">
    </div>
  </div>
  
  
    <div class="form-group">
    <label class="control-label col-sm-2" for="hinh_minh_hoa">Hinh minh hoa:</label>
    <div class="col-sm-10"> 
      <input type="text" name="hinh_minh_hoa" class="form-control" id="hinh_minh_hoa" placeholder="Nhập hinh minh hoa" value="<?=$tt->hinh_minh_hoa; ?>">
    </div>
  </div>
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" name="btnSave" id="btnSave">Lưu</button>
    </div>
  </div>
</form>