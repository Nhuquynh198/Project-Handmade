
<a href="<?=site_url('sanpham/add')?>" class="btn btn-success">Thêm sản phẩm mới</a>

<div class="table-responsive">
    <table width="416" height="102" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th width="31">STT</th>
                <th width="78">Mã sản phẩm</th>
                <th width="109">Mã chủng loại sản phẩm</th>
                <th width="51">Tên sản phẩm</th>
                <th width="47">Giá bán</th>
                <th width="40">&nbsp;</th>
                <th width="28">&nbsp;</th>
            </tr>
        </thead> 
        <tbody>
        <?php $i=0;?>
         <?php  foreach($bang_sp as $sp){?>
            <tr>
                <td><?= $i++?></td>
                <td><?=$sp->ma_san_pham; ?></td>
                <td><?=$sp->MCL; ?></td>
                <td><?=$sp->ten_san_pham; ?></td>
                <td><?=$sp->gia_ban ;?></td>
                <td><a href="<?= site_url('sanpham/edit/'.$sp->ma_san_pham)?>">Edit</a></td>
                <td><a href="<?= site_url('sanpham/delete/'.$sp->ma_san_pham)?>" onclick=" return confirm('Bạn có chắc chắn muốn xoá sản phẩm này không ?')">Delete</a></td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
<?= $phantrang ;?>