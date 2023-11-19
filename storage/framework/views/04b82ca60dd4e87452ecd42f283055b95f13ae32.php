<?php $__env->startSection('content'); ?>
<div class="row">
    <?php echo $__env->make('Admin.navDashboad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-md-10">
        <h1>Thêm truyện tranh tại đây</h1>

        <div class="content-dash">

            <div class="card-body">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tên Sách</strong>
                                <input type="text" name="name" class="form-control" placeholder="Nhập tên sách">
                            </div>
                            <div class="form-group">
                                <strong>Tác Giả</strong>
                                <input type="text" name="author" class="form-control" placeholder="Nhập tên tác giả">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả</strong>
                                <input type="text" name="description" class="form-control" placeholder="Nhập mô tả">
                            </div>
                            <div class="form-group">
                                <strong>Nội dung</strong>
                                <input type="text" name="content" class="form-control" placeholder="Nhập nội dung">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Hình ảnh</strong>
                                <input type="file" name="name" class="form-control" placeholder="tải lên">
                            </div>
                            <div class="form-group">
                                <strong>T</strong>
                                <input type="text" name="author" class="form-control" placeholder="Nhập tên tác giả">
                            </div>
                            <div class="form-group">
                                <strong>Mô tả</strong>
                                <input type="text" name="description" class="form-control" placeholder="Nhập mô tả">
                            </div>
                            <div class="form-group">
                                <strong>Nội dung</strong>
                                <input type="text" name="content" class="form-control" placeholder="Nhập nội dung">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Xác nhận</button>
                </form>
            </div>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/Admin/add.blade.php ENDPATH**/ ?>