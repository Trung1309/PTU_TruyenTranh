<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="login-form">


            <form class="bg-light" action="<?php echo e(route('custom.register')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h2 style="text-align: center;">Đăng kí</h2>
                <?php if($errors->has('email')): ?>
                    <div class="alert alert-danger">
                        <?php echo e($errors->first('email')); ?>

                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Họ và tên</label>
                    <input name="name" type="text" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input name="password" type="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu</label>
                    <input name="password_confirmation" type="password" class="form-control">
                </div>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <button type="submit" class="btn btn-primary" style="margin-bottom: 10px;">Đăng kí</button>
                <div class="row">
                    <a href="<?php echo e(route('custom.login.form')); ?>" class="col-md-6"> Quay lại đăng nhập </a>

                </div>
            </form>
        </div>
    </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\New Volume\DaiHoc\Studies_7\CongNgheMoi\ProjectLaravel\test1\resources\views/register.blade.php ENDPATH**/ ?>