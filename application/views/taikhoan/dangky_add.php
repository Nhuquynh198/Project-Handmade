<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body { padding-top:30px; }
.form-control { margin-bottom: 10px; }
</style>
</head>

<body>
<div class="container" align="center">
	
  <div class="row">
    <div class="col-lg-12">
        
            <?php echo validation_errors('<div class="alert alert-info alert-dismissable">','</div>'); ?>
      
    </div>
  </div>
   
    <div class="row"  >
        <div class="col-xs-12 col-sm-12 col-md-4 well well-sm" style="margin-left:330px;">
            <legend><i class="glyphicon glyphicon-globe"></i></a> Sign up!</legend>
            <form action="<?=site_url('dangky/add')?>" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6">
                  <input class="form-control" name="ho_khach_hang" id="ho_khach_hang" placeholder="First Name" type="text" autofocus />
                </div>
                <div class="col-xs-6 col-md-6">
                  <input class="form-control" name="ten_khach_hang" id="ten_khach_hang" placeholder="Last Name" type="text" />
                </div>
            </div>
            <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" />
            <input class="form-control" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="User name" type="text"  />
            <input class="form-control" name="mat_khau" id="mat_khau" placeholder="Password" type="password" />
            <input class="form-control" name="dien_thoai" id="dien_thoai" placeholder="Your Telephone" type="text" />
            <input class="form-control" name="dia_chi" id="dia_chi" placeholder="Your Address" type="text" />
            <label for="">Birth Date</label>
            <div class="row">
                <div class="col-xs-4 col-md-4">
                    <select size="1" class="form-control" name="ngay_sinh" id="ngay_sinh">
                      <option value="ngày">Ngày</option>
                      <?php 
					  	for ($i = 1; $i <= 31; $i++) {?>
                      	 <option value="<?=$i?>"><?=$i?></option>
                      <?php }?>
                    </select>
              </div>
                <div class="col-xs-4 col-md-4">
                    <select size="1" class="form-control" name="thang_sinh" id="thang_sinh">
                      <option value="tháng">Tháng</option>
                       <?php 
					  	for ($i = 1; $i <= 12; $i++) {?>
                      	 <option value="<?=$i?>"><?=$i?></option>
                      <?php }?>
                    </select>
              </div>
                <div class="col-xs-4 col-md-4">
                    <select size="1" class="form-control" name="nam_sinh" id="nam_sinh">
                      <option value="năm">Năm</option>
                       <?php 
					  	for ($i = 1960; $i <=2050; $i++) {?>
                      	 <option value="<?=$i?>"><?=$i?></option>
                      <?php }?>
                    </select>
              </div>
            </div>
            <label class="radio-inline">
                <input type="radio" name="gioi_tinh" id="gioi_tinh" value="1" />
                Male
            </label>
            <label class="radio-inline">
                <input type="radio" name="gioi_tinh" id="gioi_tinh" value="0" />
                Female
            </label>
            <br />
            <br />
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
            </form>
      </div>
  </div>
</div>
   

</body>
</html>