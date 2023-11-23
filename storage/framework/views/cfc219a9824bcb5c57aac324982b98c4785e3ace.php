<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <div class="container">
            <div class="login-form">

                <form class="bg-light" method="POST" action="<?php echo e(route('password.update')); ?>">

                    <?php echo csrf_field(); ?>
                    <h2 style="text-align: center;">Nhập lại mật khẩu mới</h2>
                    <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if($errors->has('password')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e($errors->first('password')); ?>

                        </div>
                    <?php endif; ?>
                    <input type="hidden" name="token" value="<?php echo e($token); ?>">

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input name="email" type="email" value="<?php echo e($email); ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password">Mật khẩu</label>
                        <input name="password"  type="password"  class="form-control"  required >
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation">Xác nhận mật khẩu</label>
                        <input name="password_confirmation" type="password" class="form-control"   required >
                    </div>
                    <button class="btn btn-primary" type="submit">Reset Password</button>
                </form>
            </div>

        </div>
    </main>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/reset-password.blade.php ENDPATH**/ ?>