 <?php foreach($bang_tieu_de as $tieude)	{  ?>
    <marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">
                            
       <a class="title_ticker" title=""><?=$tieude->tieu_de ?></a>&emsp;&emsp;&emsp;
    </marquee>
<?php }?>