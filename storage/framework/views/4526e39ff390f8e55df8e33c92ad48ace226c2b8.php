<?php $__env->startSection('content'); ?>
<div class="row">
    <?php echo $__env->make('Admin.navDashboad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="col-md-10">
        <h1>Thêm thể loại truyện tranh tại đây</h1>
        <div class="content-dash">
            <div class="card-body">
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success col-md-6">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>

                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('category.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tên thể loại</strong>
                                <input type="text" name="categoryName" class="form-control" placeholder="Nhập tên thể loại">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-2">Xác nhận</button>
                </form>
            </div>
        </div>
        <div class="table">

            <div class="content-dash">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Mã Thể loại</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Tuỳ chọn</th>
                          </tr>
                        </thead>
                        
                        <tbody>
                            <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($cat->categoryID); ?></td>
                                    <td><?php echo e($cat->categoryName); ?></td>
                                    <td>
                                        <form action="<?php echo e(route('category.destroy',$cat->categoryID)); ?>" method="POST">
                                            <a href="<?php echo e(route('category.edit',$cat->categoryID)); ?>" class="btn btn-info">Sửa</a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách không?')">Xoá</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
            </div>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/Admin/addCategory.blade.php ENDPATH**/ ?>