<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php echo $__env->make('Admin.navDashboad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-10">
            <h1>Cập nhật thế loại tại đây</h1>
            <div class="content-dash">
                <div class="card-body">
                    <?php if(Session::has('success')): ?>
                        <div class="alert alert-success col-md-6">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('category.update', $category->categoryID)); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Tên thể loại</strong>
                                    <input value="<?php echo e($category->categoryName); ?>" type="text" name="categoryName"
                                        class="form-control" placeholder="Nhập tên thể loại">
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

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/Admin/editCategory.blade.php ENDPATH**/ ?>