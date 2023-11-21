

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container">
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
        <div class="login-form">
            <form method="post" action="<?php echo e(route('login.post')); ?>" class="bg-light">
              <?php echo csrf_field(); ?>
                <h2 style="text-align: center;">Đăng nhập vào PTU</h2>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input name="email"  type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Email">
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
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Nhớ mật khẩu</label>
                </div>


                <input class="btn-success" type="submit" name="submit" id="submit" value="Đăng nhập">
                


                <div class="row">
                    <a href="<?php echo e(url('register')); ?>" class="col-md-6"> Đăng kí </a>
                    <div class="col-md-6">
                        <a href="<?php echo e(route('custom.forgot.form')); ?>" class="" style="text-align: right !important;"> Quên mật khẩu ?</a>
                    </div>
                </div>
                <a href="" class="btn btn-google btn-user btn-block " style="background: #e74c3c; color: #fff;"><i class="fa-brands fa-google" style="color: #fafafa;"></i>  Google</a>
                <a href="" class="btn btn-google btn-user btn-block " style="background: #3498db; color: #fff;"><i class="fa-brands fa-facebook" style="color: #ffffff;"></i>  Facebook</a>
              </form>
        </div>
      </div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\PTU_TruyenTranh\resources\views/login.blade.php ENDPATH**/ ?>