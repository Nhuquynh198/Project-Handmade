<!DOCTYPE html>
<html>
<head>
	<title>Tin Tức</title>
	<meta charset="utf-8">
  <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>

<body>

    <div class="container">
       
  
         <div class="row">
                
           <?php foreach($bang_tt as $tt) { ?>
              <div class="col-sm-6">
                <div class="media">
                    <div class="media-left media-middle">
                     
                      <img src="<?=base_url('IMG/'.$tt->hinh_minh_hoa)?>" class="media-object" style="width:150px"><br/>
                    
                    
                    </div>
                    <div class="media-body">
                      <a href="<?=site_url('tintuc/chitiet/'.$tt->MTT)?>">
                      <h4 class="media-heading" ><?=$tt->tieu_de?></h4>
                      </a>
                 <b>  Ngày cập nhật:<?=$tt->ngay_cap_nhat?></b>
                 </br>
                 </br>
                       <p><?= $tt->nd_cap_nhat?></p>
                    </div>
                </div>
              </div>
        
          <?php } ?>
          
     
     
      </div> 
      <?= $phantrang ;?>
    </div>
</body>
</html>
