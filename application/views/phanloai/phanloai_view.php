<div class="panel panel-success ">
     <div class="panel-heading">Danh mục sản phẩm</div>	
         <div class="panel-body">                  	
              <ul class="list-group  row">
              <?php foreach($bang_phan_loai as $phan_loai) {?>
                   <li class="list-group-item ">
                        <span class="badge"><?=$phan_loai->so_luong_sp_da_phan_loai ;?></span>
                       <a href="#"><?=$phan_loai->ten_ma_loai_san_pham ;?></a>
                    </li>
               <?php }?> 
                   
               </ul>
          </div>
      </div>
</div> 