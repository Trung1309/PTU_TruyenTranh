<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <div class="container">
            <div class="login-form">

                <form class="bg-light" action="<?php echo e(route('password.email')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <h2 style="text-align: center;">Lấy lại mật khẩu</h2>
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($errors->has('email')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e($errors->first('email')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Xác Nhận</button>
                </form>
            </div>

        </div>
    </main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/forgot.blade.php ENDPATH**/ ?>