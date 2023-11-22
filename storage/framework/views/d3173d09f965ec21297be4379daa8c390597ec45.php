<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>
    <div class="container">
        <div class="slider">
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">in chàoin chàoin chàoin chàoin chàoX</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
            <div class="slider-item">
                <img class="slider-avt" src="https://stbhatay.com.vn/wp-content/uploads/2023/02/sv24.webp" alt="">
                <div class="slider-content">
                    <a href="#" class="slider-title">Xin chào</a>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="content row">
                <div class="content-right col-md-8">
                    <div class="part-title"> Truyện mới nhất</div>
                    <div class="cards ">
                        <?php $__currentLoopData = $story; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $str): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card-item">
                            <div class="card-avt">
                                <img src="<?php echo e(asset('uploads/' . $str->storyImage)); ?>" alt="">
                            </div>
                            <div class="card-content">
                                <div class="card-title"><a href="#" ><?php echo e($str->storyName); ?></a></div>
                                <div class="card-cat"><?php echo e($str->category->categoryName); ?>    </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="content-left col-md-4">
                    <div class="sidebar">
                        <div class="part-title">Thể Loại</div>
                        <ul>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                            <li><a href="#">category 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/welcome.blade.php ENDPATH**/ ?>