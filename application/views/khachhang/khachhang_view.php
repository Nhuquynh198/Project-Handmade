
<div class="table-responsive">
<table class="table table-bordered table-hover table-striped">

<thead>
  <tr>
    <th>TT</th>
    <th>Họ khách hàng</th>
    <th>Tên khách hàng</th>
    <th>Ngày sinh</th>
    <th>Giới tính</th>
    <th>Email</th>
    <th>Điện thoại</th>
    <th>Tên đang nhập</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
  <?php $stt=1;?>
  <?php foreach($bang_kh as $kh) {?>
  <tr>
    <td><?=$stt++; ?></td>
    <td><?=$kh->ho_khach_hang?></td>
    <td><?=$kh->ten_khach_hang?></td>
    <td><?=$kh->ngay_sinh?></td>
    <td><?=$kh->phai?></td>
    <td><?=$kh->email?></td>
    <td><?=$kh->dien_thoai?></td>
    <td><?=$kh->ten_dang_nhap?></td>
    <td><a href="<?= site_url('khachhang/edit/'.$kh->MKH)?>">Sửa</a></td>
    <td><a href="<?= site_url('khachhang/delete/'.$kh->MKH)?>" onclick="return confirm('Bạn có chắc chắn muốn xoá khách hàng này không ?')">xoá</a></td>    
  </tr>
  <?php } ?>
  </tbody>
</table>
</div>
<?= $phantrang ;?>