

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="login-form">

            <form method="post" action="<?php echo e(route('register.post')); ?>" class="bg-light">
              <?php echo csrf_field(); ?>
                <h2 style="text-align: center;">Đăng kí</h2>
                <div class="mb-3">
                  <label for="name" class="form-label">Họ và Tên</label>
                  <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter your Name">
                  <?php if($errors->has('name')): ?>
                      <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                  <?php endif; ?>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email">
                  <?php if($errors->has('email')): ?>
                      <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                  <?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Mật khẩu</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter your Password">
                  <?php if($errors->has('password')): ?>
                      <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                  <?php endif; ?>
                </div>
                <div class="mb-3">
                  <label for="re_pass" class="form-label">Xác nhận mật khẩu</label>
                  <input type="password" name="re_pass" class="form-control" id="re_pass" placeholder="Confirm your Password">
                  <?php if($errors->has('re_pass')): ?>
                      <span class="text-danger"><?php echo e($errors->first('re_pass')); ?></span>
                  <?php endif; ?>
                </div>

                <input class="btn-success" type="submit" name="submit" id="submit" value="Đăng ký">
                <div class="row">
                    <a href="<?php echo e(url('login')); ?>" class="col-md-6"> Quay lại đăng nhập </a>

                </div>
              </form>
        </div>
    </div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PTU_TruyenTranh\resources\views/register.blade.php ENDPATH**/ ?>