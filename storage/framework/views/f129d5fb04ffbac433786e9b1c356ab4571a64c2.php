<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="dash-left col-md-2">
        <h2>ADMIN <strong>PTU</strong></h2>
        <ul>
            <li><a href="dashboard.html">Tổng quan</a></li>
            <li><a href="add.html">Thêm truyện</a></li>
            <li><a href="#">Thống kê</a></li>
            <li><a href="#">Trang chủ</a></li>
            <li><a href="#">Dăng xuất tài khoản</a></li>
        </ul>

    </div>
    <div class="col-md-10">
        <h1>Danh sách truyện tranh</h1>

        <div class="content-dash">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Tuỳ chỉnh</th>
                      </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <form action="" method="POST">
                                        <a href="" class="btn btn-info">Sửa</a>
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách không?')">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
                  </table>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/Admin\dashboard.blade.php ENDPATH**/ ?>