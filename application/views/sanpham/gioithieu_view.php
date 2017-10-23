<div class="panel panel-success">
                  <div class="panel-heading">SẢN PHẨM</div>
                  <div class="panel-body">
                  	  <div class="row">	
                      <?php foreach($bang_sp as $sp) { ?>
                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail" width="120">
                          <img src="<?=base_url('images-q/'.$sp->hinh_minh_hoa)?>" alt="...">
                          <div class="caption">
                            <p class="text-danger text-center"><?= $sp->gia_ban?></p>
                            <p class="text-success text-center"><?= $sp->ten_san_pham?></p>
                            <p>
                            	<a href="<?=site_url('dathang/view')?>" class="btn btn-success" role="button">Đặt mua</a> 
								<a href="#" class="btn btn-danger btn-md" role="button">Xem</a>
                            </p>                          
                          </div>
                        </div>
                        
                      </div>
                     <?php }?>
                     <?= $phantrang ;?>
                  </div>
                 
                </div>     
</div>