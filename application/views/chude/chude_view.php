<div class="panel panel-primary ">
     <div class="panel-heading">Danh mục chủ đề</div>	
         <div class="panel-body">                  	
              <ul class="list-group  row">
              <?php foreach($bang_chu_de as $chu_de) {?>
                   <li class="list-group-item ">
                        <span class="badge"><?=$chu_de->so_luong_dau_sach ;?></span>
                       <a href="#"><?=$chu_de->Ten_chu_de ;?></a>
                    </li>
               <?php }?>     
               </ul>
          </div>
      </div>
</div> 