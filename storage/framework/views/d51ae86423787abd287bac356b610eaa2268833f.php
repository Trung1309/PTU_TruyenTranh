<div class="dash-left col-md-2">
    <h2>ADMIN <strong>PTU</strong></h2>
    <ul>
        <li><a href="<?php echo e(route('stories.index')); ?>">Tổng quan</a></li>
        <li><a href="<?php echo e(route('stories.create')); ?>">Thêm truyện</a></li>
        <li><a href="<?php echo e(route('category.index')); ?>">Thêm thể loại</a></li>
        <li><a href="#">Thống kê</a></li>
        <li><a href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
        <form action="<?php echo e(route('custom.logout')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <button class="nav-link" type="submit" style="border: none;background: none">Đăng xuất</button>
        </form>
    </ul>

</div>
<?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/Admin/navDashboad.blade.php ENDPATH**/ ?>