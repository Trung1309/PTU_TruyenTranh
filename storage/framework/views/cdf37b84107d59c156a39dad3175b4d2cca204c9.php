<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php echo $__env->make('Admin.navDashboad', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-10">
            <h1>Danh sách truyện tranh</h1>
            <div class="content-dash">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success col-md-6">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>

                <table class="table" style="margin-top: 20px">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Hỉnh ảnh</th>
                            <th scope="col">Tên sách</th>
                            <th scope="col">Tác giả</th>
                            <th scope="col">Thể loại</th>
                            <th scope="col">Tuỳ chỉnh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $story; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $str): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row"><?php echo e($str->storyID); ?></th>
                                <td>
                                    <?php if($str->storyImage): ?>
                                        <div class="avt-story">
                                            <img src="<?php echo e(asset('uploads/' . $str->storyImage)); ?>" alt="Story Image"
                                                width="50">
                                        </div>
                                    <?php else: ?>
                                        No Image
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($str->storyName); ?></td>
                                <td><?php echo e($str->storyAuthor); ?></td>
                                <td><?php echo e($str->category->categoryName); ?></td>
                                <td>
                                    <form action="<?php echo e(route('stories.destroy',$str->storyID)); ?>" method="POST">
                                        <a href="<?php echo e(route('stories.edit',$str->storyID)); ?>" class="btn btn-info">Sửa</a>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa cuốn sách không?')">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <?php echo e($story->links('vendor.pagination.custom')); ?>

            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/Admin/dashboard.blade.php ENDPATH**/ ?>