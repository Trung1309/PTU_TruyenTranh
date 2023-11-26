<header class="bg-light">
    <div class="container">
        <div class="header-top">
            <div class="user">
                <?php if(auth()->guard()->check()): ?>
                    <div class="user-name"> <?php echo e(Auth::user()->name); ?></div>
                    <div class="user-avt">
                        <?php if(Auth::user()->avatar): ?>
                        <img src="<?php echo e(asset(Auth::user()->avatar)); ?>" alt="Avatar">
                        <?php else: ?>
                            <!-- Nếu không có avatar, bạn có thể hiển thị ảnh mặc định hoặc thông báo khác -->
                            <p>No avatar available</p>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="user-name">Chưa đăng nhập</div>
                    <div class="user-avt">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="">
                    </div>

                <?php endif; ?>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>"><strong>PTU</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Thể loại <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <?php $__currentLoopData = $allCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><a href="<?php echo e(route('category.show', $category->categoryID)); ?>"><?php echo e($category->categoryName); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin Tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên Hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->role === 'admin'): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('stories.index')); ?>" class="nav-link">Dashboard</a>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if(Auth::check()): ?>

                    <li class="nav-item">
                        <form action="<?php echo e(route('custom.logout')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <button class="nav-link" type="submit" style="border: none;background: none">Đăng xuất</button>
                        </form>
                    </li>
                    <?php else: ?>
                        <!-- Hiển thị nội dung cho người dùng chưa đăng nhập -->
                        <!-- Nếu người dùng chưa đăng nhập -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('custom.login.form')); ?>">Đăng nhập</a>
                        </li>
                    <?php endif; ?>
                    

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
</header>
<?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/header.blade.php ENDPATH**/ ?>