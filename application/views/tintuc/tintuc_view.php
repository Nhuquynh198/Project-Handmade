
<a href="<?=site_url('tintuc/add')?>" class="btn btn-success">Thêm tin tuc mới</a>

<div class="table-responsive">
  <table width="485" height="91" border="1">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Tiêu đề</th>
        <th scope="col">Ngày cập nhật</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Ý kiến phản hồi</th>
        <th scope="col">&nbsp;</th>
        <th scope="col">&nbsp;</th>
    </tr>
    <?php $i=1;?>
        <?php  foreach($bang_tt as $tt){?>
      <tr>
        <td><?= $i++?></td>
                <td><?=$tt->tieu_de; ?></td>
                <td><?=$tt->ngay_cap_nhat; ?></td>
                <td><?=$tt->nd_cap_nhat;?></td>
                <td><?=$tt->y_kien_phan_hoi; ?></td>
                <td><a href="<?= site_url('tintuc/edit/'.$tt->MTT)?>">Edit</a></td>
                <td><a href="<?= site_url('tintuc/delete/'.$tt->MTT)?>" onclick=" return confirm('Bạn có chắc chắn muốn xoá tin tức  này không ?')">Delete</a></td>
      </tr>
       <?php } ?>
  </table>
   
</div>
<?= $phantrang ;?>